<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller
{
	
  function __construct()
  {
    parent::__construct();
    parent::registerXajax();
  }
    
	function login($loginCredentials)
	{
      $objResponse = new xajaxResponse();
      $userName = $loginCredentials[0];
      $password = $loginCredentials[1];
      $this->load->model('Tjs_student_management_model');
      $this->load->library('smAlgorithm/StudentManagementEncryptionAlgorithm.php');
      $smAlgorithm = new StudentManagementEncryptionAlgorithm();
      $password =  $smAlgorithm->smAlgorithm($password);
      $loginStatus  = $this->Tjs_student_management_model->login($userName,$password);
      if(isset($loginStatus))
      {
        if($loginStatus[0]['status'] == 'y')
        {
           $_SESSION['group_id'] = $loginStatus[0]['group_id'];
           $_SESSION['Name'] = $loginStatus[0]['Name'];
           $objResponse->script("location.reload();");
           return $objResponse;
        }
        else
      	{
	        $objResponse->script("customAlertMessage('Login Failed','Invalid Username or Password','error')");
	        return $objResponse;
     	}
      }
	}
}





