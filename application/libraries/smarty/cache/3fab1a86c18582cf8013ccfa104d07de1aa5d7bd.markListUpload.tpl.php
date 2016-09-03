<?php
/*%%SmartyHeaderCode:6369910265641968491cb46_06597641%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fab1a86c18582cf8013ccfa104d07de1aa5d7bd' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/markListUpload.tpl',
      1 => 1447137961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6369910265641968491cb46_06597641',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'appPath' => 0,
    'basePath' => 0,
    'department' => 0,
    'i' => 0,
    'year' => 0,
    'exams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56419684997ee0_01603264',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56419684997ee0_01603264')) {
function content_56419684997ee0_01603264 ($_smarty_tpl) {
?>
<div class="row">
		<input type="hidden" id="appPath" value="localhost/myProject/StudentManagement/application">
		<input type="hidden" id="basePath" value="/var/www/html/myProject/StudentManagement/application">
		<div class="col-lg-12">
	 		<div class="container-fluid">
	 			<div class="panel panel-primary">
	 				 <div class="panel-heading">
					    <h3 class="panel-title"><i class="fa fa-upload"></i> Marklist Upload</h3>
					    <span class="customAdd pull-right"  data-toggle="modal" data-target="#addExams"><i class="customIconFont fa fa-plus-circle"></i> Add Exam</span>
						<span class="customAdd pull-right"  data-toggle="modal" data-target="#addDepartment"><i class="customIconFont fa fa-plus-circle"></i> Add Department</span>
					  </div>
		 				<div class="panel-body">
		 					<div class="row"> 
		 						<div class="col-lg-5">
		 							<label>Choose Excel File</label>
									<input type="file" id="uploadMarklist" class="uploadMarklist" name="uploadMarklist">
								</div>
							</div>
								<div class="col-lg-12">
								</br>
								<span style="margin-left:-10px">
						            <select class="cs-select cs-skin-elastic" id="studentDepartment">
						               <option value="" disabled selected>Select Department</option>
						               							               		 <option value="1">CSE</option>
						               							            </select>
						        </span>
						        <span style="margin-left:10px">
						            <select class="cs-select cs-skin-elastic" id="studentYear">
						               <option value="" disabled selected>Select Year</option>
						               							               		 <option value="1">First Year</option>
						               							               		 <option value="2">Second Year</option>
						               							               		 <option value="3">Third Year</option>
						               							               		 <option value="4">Final Year</option>
						               							            </select>
						        </span>
						        <span style="margin-left:10px">
						            <select class="cs-select cs-skin-elastic" id="studentYear">
						               <option value="" disabled selected>Select Semester</option>
						               							               		 <option value="1">First Year</option>
						               							               		 <option value="2">Second Year</option>
						               							               		 <option value="3">Third Year</option>
						               							               		 <option value="4">Final Year</option>
						               							            </select>
						        </span>
					            <span style="margin-left:10px">
						            <select class="cs-select cs-skin-elastic" id="studentExam">
						               <option value="" disabled selected>Select Exam</option>
						               							               		 <option value="1">Daily Test 1</option>
						               							               		 <option value="2">Daily Test 2</option>
						               							               		 <option value="3">sem 1</option>
						               							               		 <option value="4">Daily Test 3</option>
						               							            </select>
					            </span>
								<button class="btn btn-primary" style="margin:5 15 0px" onclick="uploadStudentMarklist()"><i class="fa fa-upload"></i>
 Upload</button>

								</div>
	 					</div>
				</div>
			</div>
		</div>
</div>

<div id="addDepartment" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Department</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
	      	<div class="col-lg-5">
	      		<label  style="margin:14px 50px 20px">Enter Deparment</label>
	      	</div>
	      	<div class="col-lg-6">
	      		<input type="text" class="form-control" id="department_name" style="margin-left:-40px;">
	      	</div> 
	      	</br></br>
	      	  <div class="col-lg-12">
			     <button class="btn btn-Danger" class="close" data-dismiss="modal"><i class="fa fa-close"></i> Close </button>
		 		<button class="btn btn-success pull-right" onclick="addDepartment(1)"><i class="fa fa-save"></i> Save </button>
			  </div> 
      	</div>

      </div>
    </div>

  </div>
</div>


<div id="addExams" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Exams</h4>
      </div>
      <div class="modal-body">
        <div class="row">
	      	<div class="col-lg-4">
	      		<label style="margin-top:10px">Enter Exam name</label>
	      	</div>
	      	<div class="col-lg-6">
	      		<input type="text" class="form-control" id="ExamName">
	      	</div> 
	      	<div class="col-lg-2">
	      	</div> 
      	</div>
      	</br>
      	 <div class="row">
	      	<div class="col-lg-4">
	      		<label style="margin-top:10px">Minimum Passmark</label>
	      	</div>
	      	<div class="col-lg-2">
	      		<div class="input-group spinner">
			    <input type="text" id="minimumPassMark" class="form-control" value="40" readonly="readonly">
			    <div class="input-group-btn-vertical">
			      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
			      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
			    </div>
	      	</div> 
      	</div>
      	</br></br></br>
      	<div class="col-lg-12">
	     	      		<button class="btn btn-Danger" class="close" data-dismiss="modal"><i class="fa fa-close"></i> Close </button>
 		<button class="btn btn-success pull-right" onclick="addExam()"><i class="fa fa-save"></i> Save </button>
	    </div> 
      </div>
    </div>

  </div>
</div><?php }
}
?>