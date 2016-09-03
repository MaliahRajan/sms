<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class editDetails extends CI_Controller
{

    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }

    function editDetails()
    {
        $smarty = new TestSmarty();
        $objResponse = new xajaxResponse();
        $template = $smarty->fetch('editDetails.tpl');
        $objResponse->script("clearDiv('xajaxSubContent')");
        $objResponse->assign("xajaxContent","innerHTML",$template);
        return $objResponse;
    }
    
}



