<div class="row">
		<input type="hidden" id="appPath" value="{$appPath}">
		<input type="hidden" id="basePath" value="{$basePath}">
		<div class="col-lg-12">
	 		<div class="container-fluid">
	 			<div class="panel panel-primary">
	 				 <div class="panel-heading">
					    <h3 class="panel-title"><i class="fa fa-user-plus"></i> Upload Student Profile</h3>
						<span class="customAdd pull-right"  data-toggle="modal" data-target="#addDepartment"><i class="customIconFont fa fa-plus-circle"></i> Add Department</span>
<!-- 						<span class="customAdd pull-right"  data-toggle="modal" data-target="#addYear"><i class="customIconFont fa fa-plus-circle"></i> Add Year</span> -->
					  </div>
		 				<div class="panel-body">
		 					<div class="row"> 
		 						<div class="col-lg-5">
		 							<label>Choose Excel File</label>
									<input type="file" class="uploadMarklist" id="uploadStudentList" name="uploadStudentList">
								</div>
							</div>
							</br>
							<div class="row">
							<div class="form-group">
			   				<label style="margin-left:20px">Department</label>
			   				<span style="margin-left:10px">
					            <select class="cs-select cs-skin-elastic" id="studentDepartment">
						            <option value="" disabled selected>Select Department</option>
						            	{foreach from=$department key=departId item=i}
						               		 <option value="{$i.department_code}">{$i.department_name}</option>
						               	{/foreach}
						        </select>
					        </span>
					        <label style="margin-left:15px">Year</label>
				            <span style="margin-left:10px">
					            <select class="cs-select cs-skin-elastic" id="studentYear">
					               <option value="" disabled selected>Select Year</option>
					               	{foreach from=$year key=yearId item=i}
					               		 <option value="{$i.year_code}">{$i.year}</option>
					               	{/foreach}
					            </select>
				            </span>
				            <label style="margin-left:15px">Semester</label>
				            <span style="margin-left:10px">
					            <select class="cs-select cs-skin-elastic" id="studentYear">
					               <option value="" disabled selected>Select Semester</option>
					               	{foreach from=$year key=yearId item=i}
					               		 <option value="{$i.year_code}">{$i.year}</option>
					               	{/foreach}
					            </select>
				            </span>
				             <span style="margin-left:20px">
					            <button class="btn btn-primary" style="margin-left:10px" onclick="uploadStudentProfile()"><i class="fa fa-upload"></i> Upload</button>
				            </span>
						</div>
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
	      		<input type="text" class="form-control" id="department_name" style="margin-left: -40px;
">
	      	</div> 
<!-- 	      	<div class="col-lg-2">
	      		<button class="btn btn-primary" onclick="addDepartment()"> submit </button>
	      	</div>  -->
	      	<div class="col-lg-12">
			     <button class="btn btn-Danger" class="close" data-dismiss="modal"><i class="fa fa-close"></i> Close </button>
		 		<button class="btn btn-success pull-right" onclick="addDepartment()"><i class="fa fa-save"></i> Save </button>
			</div> 
      	</div>
      </div>
    </div>

  </div>
</div>

<!-- 
<div id="addYear" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Year</h4>
      </div>
      <div class="modal-body">
        <div class="row">
	      	<div class="col-lg-4">
	      		<label style="margin-top:10px">Enter Year</label>
	      	</div>
	      	<div class="col-lg-6">
	      		<input type="text" class="form-control" id="year">
	      	</div> 
	      	<div class="col-lg-2">
	      		<button class="btn btn-primary" onclick="addYear()"> submit </button>
	      	</div> 
      	</div>
      </div>
    </div>

  </div>
</div> -->