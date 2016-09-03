<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class TjsStudentManagement extends CI_Controller
{
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    public function index()
    {
        /*Load Model */
        $this->load->model('Tjs_student_management_model');
        /*Load Urls */
        $_SESSION['appPath'] =  $this->config->item('app_url_manual');
        $_SESSION['basePath'] = $this->config->item('base_url_manual');
        /*Config Values*/
        $config = $this->Tjs_student_management_model->getConfig();
        $siteTitleKey = $this->Tjs_student_management_model->searchArray($config,'key','site_title');
        $appTitleKey = $this->Tjs_student_management_model->searchArray($config,'key','app_title');
        /*Assign Smarty Values*/
       	$this->smarty->assign($config[$siteTitleKey]['key'],$config[$siteTitleKey]['value']);
        $this->smarty->assign($config[$appTitleKey]['key'],$config[$appTitleKey]['value']);

        $this->smarty->assign("basePath",$_SESSION['basePath']);
       	$this->smarty->assign("xjaxJs",$this->xajax->printJavaScript());
        /*Check user Login status*/
       	if(isset($_SESSION['group_id']) && isset($_SESSION['Name']))
       	{
          $menu = $this->Tjs_student_management_model->getMenu($_SESSION['group_id']);
          $this->smarty->assign("menu",$menu);
          $this->smarty->assign("loginName",$_SESSION['Name']);
       		$this->smarty->view('index');
       	}
       	else
       	{
       		$this->smarty->view('login_index');
       	} 	
     }

}
?>