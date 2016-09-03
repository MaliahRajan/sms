<?php
/*%%SmartyHeaderCode:1842914342561a7e2b30e978_28447500%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4291e1a4bbe993c667a4a62ad0058460300d070a' => 
    array (
      0 => '/var/www/html/CI_Latest/application/views/templates/filesList.tpl',
      1 => 1444576808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1842914342561a7e2b30e978_28447500',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'moduleName' => 0,
    'tplName' => 0,
    'smartyFiles' => 0,
    'packName' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561a7e2b36b5e6_94370519',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561a7e2b36b5e6_94370519')) {
function content_561a7e2b36b5e6_94370519 ($_smarty_tpl) {
?>
<!-- Array
(
    [1] => class.module.userDisplay.php
    [2] => class.module.searchQueryFiles.php
    [3] => class.module.searchActivatedList.php
    [4] => class.module.queryFilesPreview.php
    [5] => class.module.queryFileSettings.php
    [6] => class.module.queryFileConfig.php
    [7] => class.module.productDisplay.php
    [8] => class.module.notificationDisplay.php
    [9] => class.module.menu.php
    [10] => class.module.logListDisplay.php
    [11] => class.module.controllerDisplay.php
    [12] => class.module.categoryListDisplay.php
)
1
Array
(
    [0] => index.php
    [1] => class.tpl.userDisplay.php
    [2] => class.tpl.searchQueryFiles.php
    [3] => class.tpl.queryFilesPreview.php
    [4] => class.tpl.queryFilesList.php~
    [5] => class.tpl.queryFileSettings.php
    [6] => class.tpl.queryFileConfig.php
    [7] => class.tpl.productDisplay.php
    [8] => class.tpl.notificationDisplay.php
    [9] => class.tpl.menu.php
    [10] => class.tpl.logListDisplay.php
    [11] => class.tpl.displayBaseModule.php
    [12] => class.tpl.controllerDisplay.php
    [13] => class.tpl.categoryListDisplay.php
    [14] => class.tpl.baseModule.php
    [15] => ..
    [16] => .
)
1
Array
(
    [0] => userDisplay.tpl
    [1] => userDetails.tpl
    [2] => test.tpl~
    [3] => stdBlockBlue.tpl
    [4] => searchQueryFiles.tpl
    [5] => searchActivatedList.tpl
    [6] => queryFilesPreview.tpl
    [7] => queryFilesList.tpl
    [8] => queryFileSettings.tpl
    [9] => queryFileConfig.tpl
    [10] => productDisplay.tpl
    [11] => notificationDisplay.tpl
    [12] => menu.tpl~
    [13] => menu.tpl
    [14] => mainPage.tpl
    [15] => loginHeader.tpl
    [16] => loginFooter.tpl
    [17] => loginContent.tpl
    [18] => logListDisplay.tpl
    [19] => levelsDisplay.tpl
    [20] => index.tpl
    [21] => header.tpl
    [22] => footer.tpl
    [23] => editActivatedList.tpl
    [24] => controllerDisplay.tpl
    [25] => categoryListDisplay.tpl
    [26] => addLogFiles.tpl
    [27] => ..
    [28] => .
)
1 -->
<div class="row">
	<div class="col-lg-12">
			<div class="progress progress-striped active">
				<div class="progress-bar" width="100%"></div>
			</div>
	</div>
</div>
<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					adminPack
				</div>
	  			<div class="panel-body">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#dataBaseConnectivity" data-toggle="tab" onclick="resetAnimateProgress(0)">Initial Setup</a></li>
						<li><a href="#classFiles" data-toggle="tab" onclick="resetAnimateProgress(0)">Classes</a></li>
					    <li><a href="#moduleFiles" data-toggle="tab" onclick="resetAnimateProgress(0)">Classes Module</a></li>
					    <li><a href="#tplFiles" data-toggle="tab" onclick="resetAnimateProgress(300)">Classes Tpl</a></li>
					    <li><a href="#smartyFiles" data-toggle="tab" onclick="resetAnimateProgress(600)">Smarty Template</a></li>
					    <li><a href="#jsFiles" data-toggle="tab" onclick="resetAnimateProgress(1200)">JavaScript</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-8">
				<div class="tab-content">
					<div class="tab-pane active" id="dataBaseConnectivity">
			    		<div class="panel panel-info">
			    			<div class="panel-heading inline">
								    	<span class="customHeading">Intial Setup</span>
										    			<button id="button" class="customAnchorNext pull-right btn btn-info" onclick="animateProgress(300,'tplFiles')">
										    				<span class="glyphicon glyphicon-circle-arrow-right" style="font-size:27px;">
										    				</span>
										    			</button>
							</div>
		 					<div class="panel-body">	
						    	Panel content
						  	</div>
						</div>
			    	</div>
			    	<div class="tab-pane" id="classFiles">
			    		<div class="panel panel-info">
			    			<div class="panel-heading inline">
								    	<span class="customHeading">Classes</span>
										    			<button id="button" class="customAnchorNext pull-right btn btn-info" onclick="animateProgress(300,'tplFiles')">
										    				<span class="glyphicon glyphicon-circle-arrow-right" style="font-size:27px;">
										    				</span>
										    			</button>
							</div>
		 					<div class="panel-body">	
						    	Panel content
						  	</div>
						</div>
			    	</div>
				    <div class="tab-pane" id="moduleFiles">
					    <div class="panel panel-info">
					    		 <div class="panel-heading inline">
								    	<span class="customHeading">Classes Module</span>
										    			<button id="button" class="customAnchorNext pull-right btn btn-info" onclick="animateProgress(300,'tplFiles')">
										    				<span class="glyphicon glyphicon-circle-arrow-right" style="font-size:27px;">
										    				</span>
										    			</button>
								  </div>
		 					 <div class="panel-body">
							    		<div id="baseDateControl" style="margin-top:-20px;">
							    		</div>
							    	</br>
								        <table id="moduleFileList" class="FileList table table-striped table-bordered table-hover dt-responsive" cellspacing="0">
										<thead>
											<tr id="theadRow">
												<th><span>Module Files List</span></th>
											</tr>
										</thead>
										<tbody>
								        											<tr id="checkBox1">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList1">class.module.userDisplay.php</span></font></td>
											</tr>
																					<tr id="checkBox2">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList2">class.module.searchQueryFiles.php</span></font></td>
											</tr>
																					<tr id="checkBox3">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList3">class.module.searchActivatedList.php</span></font></td>
											</tr>
																					<tr id="checkBox4">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList4">class.module.queryFilesPreview.php</span></font></td>
											</tr>
																					<tr id="checkBox5">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList5">class.module.queryFileSettings.php</span></font></td>
											</tr>
																					<tr id="checkBox6">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList6">class.module.queryFileConfig.php</span></font></td>
											</tr>
																					<tr id="checkBox7">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList7">class.module.productDisplay.php</span></font></td>
											</tr>
																					<tr id="checkBox8">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList8">class.module.notificationDisplay.php</span></font></td>
											</tr>
																					<tr id="checkBox9">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList9">class.module.menu.php</span></font></td>
											</tr>
																					<tr id="checkBox10">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList10">class.module.logListDisplay.php</span></font></td>
											</tr>
																					<tr id="checkBox11">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList11">class.module.controllerDisplay.php</span></font></td>
											</tr>
																					<tr id="checkBox12">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList12">class.module.categoryListDisplay.php</span></font></td>
											</tr>
																				</tbody>
										</table>
							 </div>
						 </div>
				    </div>
				    <div class="tab-pane" id="tplFiles">
				    	 <div class="panel panel-info">
					    		 <div class="panel-heading inline">
						    		 <button id="button" class="customAnchorPrevious btn btn-info" onclick="animateProgress(-300,'moduleFiles')">
					    				<span class="glyphicon glyphicon-circle-arrow-left" style="font-size:27px;">
					    				</span>
					    			</button>
								    	<span class="customHeading">Classes Tpl</span>
					    			<button id="button" class="customAnchorNext pull-right btn btn-info" onclick="animateProgress(300,'tplFiles')">
					    				<span class="glyphicon glyphicon-circle-arrow-right" style="font-size:27px;">
					    				</span>
					    			</button>
								  </div>
		 					 <div class="panel-body">
							    		<div id="baseDateControl" style="margin-top:-20px;">
							    		</div>
							    	</br>
								        <table id="moduleFileList" class="FileList table table-striped table-bordered table-hover dt-responsive" cellspacing="0">
										<thead>
											<tr id="theadRow">
												<th><span>Module Files List</span></th>
											</tr>
										</thead>
										<tbody>
								        											<tr id="checkBox1">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList1">class.module.userDisplay.php</span></font></td>
											</tr>
																					<tr id="checkBox2">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList2">class.module.searchQueryFiles.php</span></font></td>
											</tr>
																					<tr id="checkBox3">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList3">class.module.searchActivatedList.php</span></font></td>
											</tr>
																					<tr id="checkBox4">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList4">class.module.queryFilesPreview.php</span></font></td>
											</tr>
																					<tr id="checkBox5">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList5">class.module.queryFileSettings.php</span></font></td>
											</tr>
																					<tr id="checkBox6">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList6">class.module.queryFileConfig.php</span></font></td>
											</tr>
																					<tr id="checkBox7">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList7">class.module.productDisplay.php</span></font></td>
											</tr>
																					<tr id="checkBox8">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList8">class.module.notificationDisplay.php</span></font></td>
											</tr>
																					<tr id="checkBox9">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList9">class.module.menu.php</span></font></td>
											</tr>
																					<tr id="checkBox10">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList10">class.module.logListDisplay.php</span></font></td>
											</tr>
																					<tr id="checkBox11">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList11">class.module.controllerDisplay.php</span></font></td>
											</tr>
																					<tr id="checkBox12">
												<td>
												<img src="images/php.png" height="40" width="40"><font size="3"><span id="moduleFileList12">class.module.categoryListDisplay.php</span></font></td>
											</tr>
																				</tbody>
										</table>
							 </div>
				    </div>
				    <div class="tab-pane" id="smartyFiles">

				    </div>
				    <div class="tab-pane" id="jsFiles">

				    </div>
				</div>
			</div>
	</div>
</div><?php }
}
?>