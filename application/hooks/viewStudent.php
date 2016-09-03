<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class viewStudent extends CI_Controller
{
	
  function __construct()
  {
    parent::__construct();
    parent::registerXajax();
  }
    
	function viewStudent($viewStudent)
	{
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $this->load->model('Tjs_student_management_model');
      $department = $viewStudent[0];
      $year = $viewStudent[1];
      $studentProfile  = $this->Tjs_student_management_model->viewStudent($department,$year);
      $smarty->assign('studentProfile',$studentProfile);
      $template = $smarty->fetch('studentList.tpl');
      $objResponse->assign("xajaxSubContent","innerHTML",$template);
      $objResponse->script("makeFocus('xajaxSubContent')");
      $objResponse->script("DataTable()");
      return $objResponse;
	}
}



