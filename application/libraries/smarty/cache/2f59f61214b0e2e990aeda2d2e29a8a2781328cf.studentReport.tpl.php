<?php
/*%%SmartyHeaderCode:193357cadcd57a17c5_98862291%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f59f61214b0e2e990aeda2d2e29a8a2781328cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sms\\application\\views\\templates\\studentReport.tpl',
      1 => 1446975006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193357cadcd57a17c5_98862291',
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
  'unifunc' => 'content_57cadcd59bf620_27475748',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57cadcd59bf620_27475748')) {
function content_57cadcd59bf620_27475748 ($_smarty_tpl) {
?>
<div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title inline">
            	Maliah Rajan M - Academic Report 
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
								 	<span class="pull-right"> <button type="button" class="btn btn-success" onclick="abc(112811104026)"><i class="fa fa-floppy-o"></i> Save</button></span>
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
								 	<span class="pull-right"> <button type="button" class="btn btn-success" onclick="abc(112811104026)"><i class="fa fa-floppy-o"></i> Save</button></span>
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
								 	<span class="pull-right"> <button type="button" class="btn btn-success" onclick="abc(112811104026)"><i class="fa fa-floppy-o"></i> Save</button></span>
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