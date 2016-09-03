<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class addExam extends CI_Controller
{
  
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
  function addExam($examName)
  {
    $smarty = new TestSmarty();
    $objResponse = new xajaxResponse();
    $this->load->model('Tjs_student_management_model');
    $status = $this->Tjs_student_management_model->insertExam($examName);
    if($status == 'success')
      {
        $objResponse->script("customAlertMessage('Exam Added Sucessfully','New Exam Name Added','success')");
        $objResponse->script("modalHide('addExams')");
        $objResponse->script("xajax_uploadMarklist()");
      }
      else
      {
        $objResponse->script("customAlertMessage('Exam Already Exists','Exam Name Already Exists','warning')");
      }
    return $objResponse;
  }
}



