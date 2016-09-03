<?php
/*%%SmartyHeaderCode:1951556673561e556ded0911_07951330%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3805a3064304d4d44ebfbb420da9614997b2081' => 
    array (
      0 => '/var/www/html/CI_Latest/application/views/templates/index.tpl',
      1 => 1443631117,
      2 => 'file',
    ),
    'c0ad08f3ad6c51fd7ccec1f69f11fecff3b6c37a' => 
    array (
      0 => '/var/www/html/CI_Latest/application/views/templates/header.tpl',
      1 => 1444828523,
      2 => 'file',
    ),
    '9f8759ac1c12e30829b8c5425ed727f125dc4b81' => 
    array (
      0 => '/var/www/html/CI_Latest/application/views/templates/main.tpl',
      1 => 1444572940,
      2 => 'file',
    ),
    '80feef122841fc0f1c0dfcc5d241fb85dccec016' => 
    array (
      0 => '/var/www/html/CI_Latest/application/views/templates/footer.tpl',
      1 => 1444575289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1951556673561e556ded0911_07951330',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561e556e0899c7_77440721',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561e556e0899c7_77440721')) {
function content_561e556e0899c7_77440721 ($_smarty_tpl) {
?>
<html>
<head>
    <title>Product Plugins</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables/dataTables.bootstrap.js"></script> 
    <script type="text/javascript" src="js/productPlugin.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="row">
      <!-- Second navbar for categories -->
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Product Plugins</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav nav-pills navbar-right">
                            <li role="presentation"><a onclick="xajax_filesList('mtcBusSearch');">mtcBusSearch</a></li>
                            <li role="presentation"><a onclick="xajax_filesList('cakeCreation');">cakeCreation</a></li>
                            <li role="presentation"><a onclick="xajax_filesList('adminPack');">adminPack</a></li>
                          </ul>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navbar -->
</div>


<div id="ciMainDiv">
     <div class="row">
        <div class="container">
            <div class="col-xs-12">
                  <div class="panel panel-primary">
            				  <div class="panel-heading">
            				    <h3 class="panel-title">Product Plugin Installation</h3>
            				  </div>
            				  <div class="panel-body">
            				    <div id="xajaxContent"></div>
            				  </div>
          				</div>   	
            </div>
        </div>
    </div>
</div>
<div id="ciMainDiv1"></div>
<div id="ciMainDiv2"></div>
<div id="ciMainDiv3"></div>
</body>
	<div class="row">
		<div class="container-fluid">
			<nav class="navbar navbar-default navbar-static-bottom">
				<div class="row">
					<div class="container">
				  		<div id="footer">
				  			<div class="col-lg-10">
				  				Infiniti Software Solutions
				  			</div>
				  			<div class="col-lg-2">
				  				copyright (c) 2015
				  			</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
  	</div>	
</html>
<?php }
}
?>