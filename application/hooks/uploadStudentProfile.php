<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class uploadStudentProfile extends CI_Controller
{
	
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
	function uploadStudentProfile($uploadStudentProfile)
	{
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $this->load->model('Tjs_student_management_model');
      $this->load->library('PHPExcel/PHPExcel/');
      $this->load->library('PHPExcel/Excelarray.php');
      $appPath = dirname(__DIR__);
      $excelFile = $appPath.'/excel_Uploads/'.$uploadStudentProfile['fileName'];
      $excelToArrayObj = new Excelarray();
      $arrayData = $excelToArrayObj->excelToArray($excelFile);
      $StudentProfile = array_combine(range(1, count($arrayData)), array_values($arrayData));
      $department = $uploadStudentProfile['studentDepartment'];
      $year = $uploadStudentProfile['studentYear'];
      $status = $this->Tjs_student_management_model->insertStudentProfile($department,$year,$StudentProfile);
      unlink($excelFile);
          if($status == 'success')
          {
             $objResponse->script("customAlertMessage('Upload Sucess','Student Profile Uploded Sucessfully','success')");
             $objResponse->script("xajax_addStudentList()");
          }
          else
          {
             $objResponse->script("customAlertMessage('Upload Failed','Student Profile already Exists','warning')");
             $objResponse->script("xajax_addStudentList()");
          }
      return $objResponse;
	}
}



