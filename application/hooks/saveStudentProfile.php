<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class saveStudentProfile extends CI_Controller
{
	
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
	function saveStudentProfile($student_profile_no,$studentData)
	{
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $this->load->model('Tjs_student_management_model');
      $studentProfile = $this->Tjs_student_management_model->updateStudent($student_profile_no,$studentData);
      $objResponse->script("modalHide('studentModalNo".$student_profile_no."')");
      $smarty->assign('studentProfile',$studentProfile);
      $template = $smarty->fetch('studentList.tpl');
      $objResponse->assign("xajaxSubContent","innerHTML",$template);
      $objResponse->script("DataTable()");
      $objResponse->script("customAlertMessage('Updation Sucess','Student Profile Updated Sucessfully','success')");
      return $objResponse;
	}
}



