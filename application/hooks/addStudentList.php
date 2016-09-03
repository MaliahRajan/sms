<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class addStudentList extends CI_Controller
{
	
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
	function addStudentList()
	{
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $this->load->model('Tjs_student_management_model');
      $data  = $this->Tjs_student_management_model->addStudentList();
      $department = $data[0];
      $year = $data[1];
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $smarty->assign('appPath',$_SESSION['appPath']);
      $smarty->assign('basePath',$_SESSION['basePath']);
      $smarty->assign('department',$department);
      $smarty->assign('year',$year);
      $template = $smarty->fetch('addStudentList.tpl');
      $objResponse->assign("xajaxContent","innerHTML",$template);
      $objResponse->script("clearDiv('xajaxSubContent')");
      $objResponse->script("uploadMarklist()");
      $objResponse->script("quickSearch()");
      return $objResponse;
	}
}



