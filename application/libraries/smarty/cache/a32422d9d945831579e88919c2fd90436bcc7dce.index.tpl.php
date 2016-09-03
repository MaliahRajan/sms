<?php
/*%%SmartyHeaderCode:13689551565643213a925f45_26343264%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a32422d9d945831579e88919c2fd90436bcc7dce' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/index.tpl',
      1 => 1445161652,
      2 => 'file',
    ),
    '378829c1836527d9a2158f9f3be87ff926823eed' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/header.tpl',
      1 => 1447003853,
      2 => 'file',
    ),
    '22f5d4ba4e5a267028387a0e1972d009ae11c1b9' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/main.tpl',
      1 => 1446997495,
      2 => 'file',
    ),
    '306b43be52413646c3dfbd99eaccbfcac983b130' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/footer.tpl',
      1 => 1447003104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13689551565643213a925f45_26343264',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5643213aa35902_66844903',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5643213aa35902_66844903')) {
function content_5643213aa35902_66844903 ($_smarty_tpl) {
?>
<html>
<head>
    <title>Student Management System</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/metisMenu.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/cs-select.css"/>
    <link rel="stylesheet" type="text/css" href="css/cs-skin-elastic.css">
    <link href="css/half-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweet-alert.css">
    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/multiple-select.css">
</head>
<body>

   <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Student Management System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li onclick="xajax_logout()"><a><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                                                                                    <li onclick="location.reload();">
                                    <a href="#"><i class="fa fa-home"></i> Home</a>
                                </li>
                                                                                                                 <li onclick="xajax_quickSearch()">
                                    <a href="#"><i class="fa fa-search"></i> Quick Search</a>
                                </li>
                                                                                                                 <li onclick="xajax_addStudentList()">
                                    <a href="#"><i class="fa fa-user-plus"></i> Upload Student Profile</a>
                                </li>
                                                                                                                 <li onclick="xajax_uploadMarklist()">
                                    <a href="#"><i class="fa fa-upload"></i> Upload Marklist</a>
                                </li>
                                                                                                                 <li onclick="xajax_overallReport()">
                                    <a href="#"><i class="fa fa-pie-chart"></i> Overall Report</a>
                                </li>
                                                                         </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
<!--              <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissable alert-info">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                        Welcome to the Student Management System..!!  All in one tool to manage and track student profile.
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Welcome Admin</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<!--In future include the notificatin here-->
              <div id="xajaxContent">  
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-home"></i> Home</h3>
                    </div>
                    <div class="panel-body">
                                     <header id="myCarousel" class="carousel slide">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Wrapper for Slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <!-- Set the first background image using inline CSS below. -->
                                                <div class="fill" style="background-image:url('images/banner-aboutus.jpg');"></div>
                                            </div>
                                            <div class="item">
                                                <!-- Set the second background image using inline CSS below. -->
                                                <div class="fill" style="background-image:url('images/banner-aboutus.jpg');"></div>
                                           </div>
                                            <div class="item">
                                                <!-- Set the third background image using inline CSS below. -->
                                                <div class="fill" style="background-image:url('images/banner-aboutus.jpg');"></div>
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="icon-prev"></span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="icon-next"></span>
                                        </a>
                                    </header>
                          </div>

                     </div>

     
        </div>
        <div id="xajaxSubContent">
                                
        </div>
        <div id="xajaxSubContentCopy">
                                
        </div>

    </div>
        <!-- /#page-wrapper -->
</div>
</body>
		<div class="container-fluid">
			<nav class="navbar navbar-default navbar-static-bottom" style="margin-bottom:0px">
					<div class="container" style="padding-top:20px;">
				  		<div id="footer">
				  			<div class="col-lg-10">
				  				Infiniti Software Solutions
				  			</div>
				  			<div class="col-lg-2">
				  				copyright (c) 2015
				  			</div>
						</div>
					</div>
			</nav>
		</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/sweet-alert.js"></script>	
<!-- Custom Theme JavaScript -->
<script type="text/javascript" src="js/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables/dataTables.bootstrap.js"></script> 
<script type="text/javascript" src="js/metisMenu.min.js"></script>
<script type="text/javascript" src="js/studentManagementSystem.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
<script type="text/javascript" src="js/selectFx.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/fusioncharts-jquery-plugin.min.js"></script>
<script type="text/javascript" src="js/fusioncharts.charts.js"></script>
<script type="text/javascript" src="js/fusionCharts.js"></script>
<script type="text/javascript" src="js/jquery.multiple.select.js"></script>
<script src="js/sb-admin-2.js"></script>
<script>
	$('.carousel').carousel({
	    interval: 5000 //changes the speed
	})
</script>
</html>
<?php }
}
?>