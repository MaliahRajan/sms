<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class studentReport extends CI_Controller
{
	
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
	function studentReport()
	{
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $this->load->model('Tjs_student_management_model');
      $studentProfile = $this->Tjs_student_management_model->fetchStudentReport($_SESSION['group_id']);
      $studentId = $studentProfile[0]['student_profile_no'];
      $objResponse->script("xajax_getStudentReport(".$studentId.")");
      $objResponse->script("xajax_getStudentReport(".$studentId.")");
      return $objResponse;
	}
}