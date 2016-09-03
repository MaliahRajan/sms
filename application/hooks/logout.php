<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class logout extends CI_Controller
{
	
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
	function logout()
	{
      $objResponse = new xajaxResponse();
      session_destroy();
      $objResponse->script("location.reload();");
      return $objResponse;
	}
}



