<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class fetchExamDetails extends CI_Controller
{
	
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
	function fetchExamDetails($fetchExamDetails)
	{  
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $this->load->model('Tjs_student_management_model');
      $depart_code = $fetchExamDetails['studentDepartment'];
      $year_code = $fetchExamDetails['studentYear'];
      $examDetails  = $this->Tjs_student_management_model->getExamDetails($depart_code,$year_code);
      $smarty->assign('examDetails',$examDetails);
      $template = $smarty->fetch('getExamCode.tpl');
      $objResponse->script("xajax_overallReport()"); 
      $objResponse->script("injectData('ms','$template')");
      $objResponse->script("multipleSelect()");
      $objResponse->script("modalOpen('examModal')");
      return $objResponse;
	}
}



