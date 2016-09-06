<?php
/*%%SmartyHeaderCode:1901214204570cd039401083_41880844%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd011c69dab14de78298748b94cd563ded329c562' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/studentReport.tpl',
      1 => 1446975006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1901214204570cd039401083_41880844',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'studentName' => 0,
    'finalArray' => 0,
    'registration_no' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570cd039486eb0_60046582',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570cd039486eb0_60046582')) {
function content_570cd039486eb0_60046582 ($_smarty_tpl) {
?>
<div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title inline">
            	Manikandan M - Academic Report 
            <div><button class="btn btn-danger pull-right" style="margin:-21px -4px 0px;padding:2px" onclick="clearSubDiv('xajaxSubContentCopy')"><span class="glyphicon glyphicon-remove" style="padding:0px" ></span></button></div>
          </div>
        </div>
		<div class="panel-body">
     			<div class="row">
					<div class="container-fluid">
													<div class="col-lg-6">
								 <div id="chart-container0">Loading....</div>
								 </br>
								 <div class="row">
								 	<div class="col-lg-11">
								 		<span><button type="button" class="btn btn-success" style="margin-left:20px" onclick="abc()"><i class="fa fa-print"></i> Print</button></span>
								 	<span class="pull-right"> <button type="button" class="btn btn-success" onclick="abc(112811104027)"><i class="fa fa-floppy-o"></i> Save</button></span>
								 	</div>
								 </div>
								</br>
							</div>
													<div class="col-lg-6">
								 <div id="chart-container1">Loading....</div>
								 </br>
								 <div class="row">
								 	<div class="col-lg-11">
								 		<span><button type="button" class="btn btn-success" style="margin-left:20px" onclick="abc()"><i class="fa fa-print"></i> Print</button></span>
								 	<span class="pull-right"> <button type="button" class="btn btn-success" onclick="abc(112811104027)"><i class="fa fa-floppy-o"></i> Save</button></span>
								 	</div>
								 </div>
								</br>
							</div>
													<div class="col-lg-6">
								 <div id="chart-container2">Loading....</div>
								 </br>
								 <div class="row">
								 	<div class="col-lg-11">
								 		<span><button type="button" class="btn btn-success" style="margin-left:20px" onclick="abc()"><i class="fa fa-print"></i> Print</button></span>
								 	<span class="pull-right"> <button type="button" class="btn btn-success" onclick="abc(112811104027)"><i class="fa fa-floppy-o"></i> Save</button></span>
								 	</div>
								 </div>
								</br>
							</div>
											</div>
				</div>
       </div>
</div>
</br>
				              <?php }
}
?>