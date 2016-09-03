<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class addDepartment extends CI_Controller
{
  
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
  function addDepartment($departmentName,$moduleName='')
  {
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $this->load->model('Tjs_student_management_model');
      $status = $this->Tjs_student_management_model->insertDepartment($departmentName);
        if($moduleName=='')
        {
           if($status == 'success')
          {
            $objResponse->script("customAlertMessage('Department Added Sucessfully','New Department Added','success')");
            $objResponse->script("modalHide('addDepartment')");
            $objResponse->script("xajax_addStudentList()");
          }
          else
          {
            $objResponse->script("customAlertMessage('Department Already Exists','Department Name Already Exists','warning')");
          }
        }
        else
        {
          if($status == 'success')
          {
            $objResponse->script("customAlertMessage('Department Added Sucessfully','New Department Added','success')");
            $objResponse->script("modalHide('addDepartment')");
            $objResponse->script("xajax_uploadMarklist()");
          }
          else
          {
            $objResponse->script("customAlertMessage('Department Already Exists','Department Name Already Exists','warning')");
            //$this->objResponse->script("xajax_uploadMarklist()");
          }
        }
      return $objResponse;
  }
}



