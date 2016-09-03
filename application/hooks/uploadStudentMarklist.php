<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class uploadStudentMarklist extends CI_Controller
{
	
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
	function uploadStudentMarklist($uploadStudentMarklist)
	{
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $this->load->model('Tjs_student_management_model');
      $fileName = $uploadStudentMarklist['fileName'];
      $department = $uploadStudentMarklist['studentDepartment'];
      $exam = $uploadStudentMarklist['studentExam'];
      $year = $uploadStudentMarklist['studentYear'];
      $status = $this->Tjs_student_management_model->insertMarklist($fileName,$department,$exam,$year);
      if($status == 'success')
      {
         $objResponse->script("customAlertMessage('Upload Sucess','Marklist Uploded Sucessfully','success')");
         $objResponse->script("xajax_uploadMarklist()");
      }
      else if($status == 'failed')
      {
         $objResponse->script("customAlertMessage('Upload Failed','Marklist already Exists','warning')");
         $objResponse->script("xajax_uploadMarklist()");
      }
      return $objResponse;
	}
}



