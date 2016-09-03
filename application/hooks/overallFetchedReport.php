<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class overallFetchedReport extends CI_Controller
{
	
  function __construct()
  {
    parent::__construct();
    parent::registerXajax();
  }
    
	function overallFetchedReport($selectedFiles)
	{
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      //Loading Model
      $this->load->model('Tjs_student_management_model');
      $excelFileNames  = $this->Tjs_student_management_model->getExcelFiles($selectedFiles);
      //fetchExcel Files
      foreach ($excelFileNames as $key => $value) {
         $_SESSION['file_name'] = $excelFileNames[$key]->file_name;
         $_SESSION['exams'] =  $excelFileNames[$key]->exams;
         $_SESSION['minimum_pass_mark'] =   $excelFileNames[$key]->minimum_pass_mark;
         $tempFinalArray[$key] = $this->getSubjectReport();
         $finalArray[$key] = json_decode(json_encode($tempFinalArray[$key]), FALSE);
         $tempCaptions = $this->getSubjectReport('getCaption');
         $captions = json_decode(json_encode($tempCaptions), FALSE);
         unset($_SESSION['file_name']);
         unset($_SESSION['exams']);
         unset($_SESSION['minimum_pass_mark']);
      }
      $dataset =  json_encode($finalArray);
      $category = json_encode($captions);
      $objResponse->script("initiateOverallReport($dataset,$category)");
      return $objResponse;
	}
  function getSubjectReport($caption = '')
  {
    //Loading Excel Reader Library Files
    $this->load->library('PHPExcel/PHPExcel/');
    $this->load->library('PHPExcel/Excelarray.php');
    //set the base path
    $basePath = $_SESSION['basePath'];
    //Specify Excel File
    $excelFile = $basePath.'/excel_Uploads/marklist/'.$_SESSION['file_name'];
    $excelToArrayObj = new Excelarray();
    $StudentMarklist = $excelToArrayObj->excelToArray($excelFile);

    $tempArray = $StudentMarklist;
    foreach ($tempArray as $key => $value) {
      unset($tempArray[$key]['registration_no']);
    }
    $category = array();
    $count;
    foreach ($tempArray as $tempKey => $mainValue) {
        $count  = count($mainValue);
        foreach ($mainValue as $subTempkey => $subValue) {
             $category[]['label'] = $subTempkey;
        }
    }
    foreach ($category as $key => $value) {
       if($key>=$count)
       {
          unset($category[$key]);
       }
    }
    if($caption == 'getCaption')
    {
        return $category;
    }
    else
    {
      $finalArray = array();
      foreach ($category as $key => $value) {
        $tempFinalArray['seriesname'] = $_SESSION['exams'];
        $tempSubject = array_column($StudentMarklist,$category[$key]['label']); 
        $tempFinalArray['data'][$key]['value'] = $this->passPercentage($tempSubject);
      }
       return $tempFinalArray;
    }
  }
  function passPercentage($subject)
  {
    $noOfPass = array_filter($subject, function($value){
        return $value > $_SESSION['minimum_pass_mark'];
    });
    $overallCount  = count($subject);
    $passPercentageCount = count($noOfPass);
    $passPercentage = ($passPercentageCount/$overallCount)*100;
    return $passPercentage;
  }
  function absentees($subject)
  {
      $noOfAbsent = array_filter($subject, function($value){
          return $value == 'AB';
      });
      return $noOfAbsent;
  }
  function getFailures($subject)
  {
      $noOfFailiures = array_filter($subject, function($value){
          return $value < $_SESSION['minimum_pass_mark'];
      });
      return $noOfFailiures;
  }
/*  function getToppers($subject)
  {
      $noOfToppers = array_filter($subject, function($value){
      return $value > $_SESSION['minimum_pass_mark'];
      });
      rsort($noOfToppers);
      $toppers = array();
      $top20 = array_slice($noOfToppers, 0, 20);
      foreach ($top20 as $key => $val) {
        $toppers[] = 
      }
      print_r($toppers);
  }*/
}



