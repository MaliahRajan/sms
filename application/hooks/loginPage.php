<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class loginPage extends CI_Controller
{
	
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    
	function loginPage()
	{
	  $smarty = new TestSmarty();
	  $objResponse = new xajaxResponse();
	  $template = $smarty->fetch('login_form.tpl');
	  $objResponse->assign("loginXajax_content","innerHTML",$template);
	  $objResponse->script("loginFormAnimation()");  
	  return $objResponse;
	}
}



