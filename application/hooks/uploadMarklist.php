<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class uploadMarklist extends CI_Controller
{
	
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
	function uploadMarklist()
	{
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $this->load->model('Tjs_student_management_model');
      $exams = $this->Tjs_student_management_model->selectExam();
      $data  = $this->Tjs_student_management_model->addStudentList();
      $department = $data[0];
      $year = $data[1];
      $smarty->assign('exams',$exams);
      $smarty->assign('department',$department);
      $smarty->assign('year',$year);
      $smarty->assign('appPath',$_SESSION['appPath']);
      $smarty->assign('basePath',$_SESSION['basePath']);
      $template = $smarty->fetch('markListUpload.tpl');
      $objResponse->script("clearDiv('xajaxSubContent')");
      $objResponse->assign("xajaxContent","innerHTML",$template);
      $objResponse->script("uploadMarklist()");
      $objResponse->script("quickSearch()");
      return $objResponse;
	}
}



