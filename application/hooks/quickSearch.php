<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class quickSearch extends CI_Controller
{
	
  function __construct()
  {
    parent::__construct();
    parent::registerXajax();
  }
    
	function quickSearch()
	{
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $this->load->model('Tjs_student_management_model');
      $data  = $this->Tjs_student_management_model->addStudentList();
      $department = $data[0];
      $year = $data[1];
      $smarty->assign('department',$department);
      $smarty->assign('year',$year);
      $template = $smarty->fetch('quickSearch.tpl');
      $objResponse->assign("xajaxContent","innerHTML",$template);
      $objResponse->script("clearDiv('xajaxSubContent')"); 
      $objResponse->script("clearSubDiv('xajaxSubContentCopy')"); 
      $objResponse->script("quickSearch()");
      return $objResponse;
	}
}



