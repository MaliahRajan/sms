<?php
/*%%SmartyHeaderCode:19466115057ce4b18622d06_45683629%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '892263a6b778631e043495b69e9ebefcac793856' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/quickSearch.tpl',
      1 => 1473136935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19466115057ce4b18622d06_45683629',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'department' => 0,
    'i' => 0,
    'year' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57ce4b1866c845_83471778',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57ce4b1866c845_83471778')) {
function content_57ce4b1866c845_83471778 ($_smarty_tpl) {
?>
<div class="row">
 		<div class="container-fluid">
 			<div class="panel panel-primary">
	 			<div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-search"></i> Quick Search</h3>
				  </div>
					<div class="panel-body">
			   			<div class="form-group">
			   				<div class="col-lg-3">
			   					<label>Department</label>
						            <select class="form-control" id="studentDepartment">
							            								               		 <option value="1">CSE</option>
							               								        </select>
					        </div>
					        <div class="col-lg-3">
					        	<label>Year</label>
					            <select class="form-control" id="studentYear">
					               						               		 <option value="1">First Year</option>
					               						               		 <option value="2">Second Year</option>
					               						               		 <option value="3">Third Year</option>
					               						               		 <option value="4">Final Year</option>
					               						            </select>
				            </div>
				            <div class="col-lg-3">
				            	<label>Semester</label>
					            <select class="form-control" id="studentYear">
					               						               		 <option value="1">First Year</option>
					               						               		 <option value="2">Second Year</option>
					               						               		 <option value="3">Third Year</option>
					               						               		 <option value="4">Final Year</option>
					               						            </select>
					       	</div>
					       	<div class="col-lg-3">
					       		 <button class="btn btn-primary" style="margin-top: 10%" onclick="viewStudent()"><i class="fa fa-search"></i> Search</button>
				            </div>
						</div>
					</div>
			</div>
		</div>
</div><?php }
}
?>