<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class getStudentReport extends CI_Controller
{
  
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
  public function getStudentReport($student_profile_no)
  {
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $appPath = dirname(__DIR__);   
      $this->load->model('Tjs_student_management_model');
      $this->load->library('PHPExcel/PHPExcel/');
      $this->load->library('PHPExcel/Excelarray.php');
      $studentData = $this->Tjs_student_management_model->getStudentReport($student_profile_no);
      $registration_no = $studentData[0];
      $file_name_array = $studentData[1];
      $exams = $studentData[2];
      $studentName = $studentData[3];
      $count =  count($file_name_array);
      $finalArray = array();
      for($i=0;$i<$count;$i++)
      {
        $excelFile = $appPath.'/excel_Uploads/marklist/'.$file_name_array[$i]['file_name'];
        $excelToArrayObj = new Excelarray();
        $arrayData = $excelToArrayObj->excelToArray($excelFile);
        $StudentProfile = array_combine(range(1, count($arrayData)), array_values($arrayData));
        $key = $this->searchForId($registration_no,$StudentProfile);
        if($key == null)
        {
          $finalArray[$i]  = null;;
        } 
        else
        {
          unset($StudentProfile[$key]['registration_no']);
            $tempArray = array();
            $index = 0;
            foreach ($StudentProfile[$key] as $key => $val) 
            {

              $tempArray[$index]['label'] = $key;
              $tempArray[$index]['value'] = $val;
              $index++;
            }
         $finalArray[$i]  = $tempArray;
        }

      }
      $smarty->assign('registration_no',$registration_no);
      $smarty->assign('studentName',$studentName);
      $smarty->assign('finalArray',$finalArray);
      $template = $smarty->fetch('studentReport.tpl');
      $objResponse->script("hideDiv('xajaxSubContent')");
      $objResponse->assign("xajaxSubContentCopy","innerHTML",$template);
      $count = count($exams);
      $examsScript = array();
      $finalArrayScript = array();
      for($i=0;$i<$count;$i++)
      {
          $examsScript[$i] = $exams[$i];
          $finalArrayScript[$i] = $finalArray[$i];
      }
      $finalArrayScript = json_encode($finalArrayScript);
      $examsScript = json_encode($examsScript);
      $objResponse->script("initiateChart($finalArrayScript,$examsScript)");
      $objResponse->script("makeFocus('xajaxSubContentCopy')");
      return $objResponse;
  }
  public function searchForId($id, $array) {
     foreach ($array as $key => $val) {
         if ($val['registration_no'] == $id) {
             return $key;
         }
     }
     return null;
  }
}



