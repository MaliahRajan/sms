<?php
/*%%SmartyHeaderCode:266970155564321445d4434_17013068%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'addb26bd8413d36c1b47ef0e74282e32ca82cf45' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/login_index.tpl',
      1 => 1446028422,
      2 => 'file',
    ),
    'f540d59caa4d20464eb19d2ca5f68a6639765cc1' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/login_header.tpl',
      1 => 1446990361,
      2 => 'file',
    ),
    'c1b445460bdbdeb96f8b2fff4da11f31e6a2653d' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/login_main.tpl',
      1 => 1447062355,
      2 => 'file',
    ),
    '26741eb0b1912b9aa87b4f52470145c4d05cd7f7' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/login_footer.tpl',
      1 => 1445334977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266970155564321445d4434_17013068',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564321446228c0_04806146',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564321446228c0_04806146')) {
function content_564321446228c0_04806146 ($_smarty_tpl) {
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