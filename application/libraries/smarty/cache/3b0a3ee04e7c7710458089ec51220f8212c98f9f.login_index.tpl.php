<?php
/*%%SmartyHeaderCode:1009257cadbb7e9ecf3_52182853%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b0a3ee04e7c7710458089ec51220f8212c98f9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sms\\application\\views\\templates\\login_index.tpl',
      1 => 1446028422,
      2 => 'file',
    ),
    '01d6e8cf28674147c09ccbb7bddee15678086699' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sms\\application\\views\\templates\\login_header.tpl',
      1 => 1446990360,
      2 => 'file',
    ),
    'a9b07241a318439e52d4d3740abbe9d2c73f91c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sms\\application\\views\\templates\\login_main.tpl',
      1 => 1447062354,
      2 => 'file',
    ),
    '7fcbc99e3484a9fb4763bc6ac8b3a824fb3af9d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sms\\application\\views\\templates\\login_footer.tpl',
      1 => 1445334976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009257cadbb7e9ecf3_52182853',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57cadbb82cb2e7_67543310',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57cadbb82cb2e7_67543310')) {
function content_57cadbb82cb2e7_67543310 ($_smarty_tpl) {
?>
<html>
<head>
    <title>Student Management System</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" type="text/css" href="css/carousal.css"/>
    <link rel="stylesheet" type="text/css" href="css/loginForm.css">
</head>
<body>



<div id="loginXajax_content">
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#bs-carousel" data-slide-to="1"></li>
      <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-1"></div>
        <div class="hero">
          <hgroup>
              <h1>Student Management System</h1>        
              <h3>All in one tool to manage and track student profile.</h3>
          </hgroup>
           <button class="btn btn-hero btn-lg" role="button" onclick="xajax_loginPage()">Enter</button>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-2"></div>
        <div class="hero">        
           <hgroup>
              <h1>Student Management System</h1>        
              <h3>All in one tool to manage and track student profile.</h3>
          </hgroup>    
          <button class="btn btn-hero btn-lg" role="button" onclick="xajax_loginPage()">Enter</button>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-3"></div>
        <div class="hero">        
          <hgroup>
              <h1>Student Management System</h1>        
              <h3>All in one tool to manage and track student profile.</h3>
          </hgroup>
           <button class="btn btn-hero btn-lg" role="button" onclick="xajax_loginPage()">Enter</button>
        </div>
      </div>
    </div> 
  </div>
</div>



</body>
<script type="text/javascript" src="js/sweet-alert.js"></script>	
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/studentManagementSystem.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/loginForm.js"></script>
</html>
<?php }
}
?>