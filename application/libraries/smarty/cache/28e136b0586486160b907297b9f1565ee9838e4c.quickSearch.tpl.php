<?php
/*%%SmartyHeaderCode:1825757cadbffdb49b7_83667068%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28e136b0586486160b907297b9f1565ee9838e4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sms\\application\\views\\templates\\quickSearch.tpl',
      1 => 1447137638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1825757cadbffdb49b7_83667068',
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
  'unifunc' => 'content_57cadbffe58fe3_20810506',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57cadbffe58fe3_20810506')) {
function content_57cadbffe58fe3_20810506 ($_smarty_tpl) {
?>
<div class="row">
		<div class="col-lg-12">
 		<div class="container-fluid">
 			<div class="panel panel-primary">
	 			<div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-search"></i> Quick Search</h3>
				  </div>
					<div class="panel-body">
			   			<div class="form-group">
			   				<label style="margin-left:5px">Department</label>
			   				<span style="margin-left:10px">
					            <select class="cs-select cs-skin-elastic" id="studentDepartment">
						            <option value="" disabled selected>Select Department</option>
						            							               		 <option value="1">CSE</option>
						               							        </select>
					        </span>
					        <label style="margin-left:15px">Year</label>
				            <span style="margin-left:10px">
					            <select class="cs-select cs-skin-elastic" id="studentYear">
					               <option value="" disabled selected>Select Year</option>
					               						               		 <option value="1">First Year</option>
					               						               		 <option value="2">Second Year</option>
					               						               		 <option value="3">Third Year</option>
					               						               		 <option value="4">Final Year</option>
					               						            </select>
				            </span>
				            <label style="margin-left:15px">Semester</label>
				            <span style="margin-left:10px">
					            <select class="cs-select cs-skin-elastic" id="studentYear">
					               <option value="" disabled selected>Select Semester</option>
					               						               		 <option value="1">First Year</option>
					               						               		 <option value="2">Second Year</option>
					               						               		 <option value="3">Third Year</option>
					               						               		 <option value="4">Final Year</option>
					               						            </select>
				            </span>
				             <span style="margin-left:20px">
					            <button class="btn btn-primary" style="margin-left:10px" onclick="viewStudent()"><i class="fa fa-search"></i> Search</button>
				            </span>
						</div>
					</div>
			</div>
		</div>
	</div>

</div><?php }
}
?>