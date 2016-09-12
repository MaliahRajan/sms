<div class="row">
		<input type="hidden" id="appPath" value="{$appPath}">
		<input type="hidden" id="basePath" value="{$basePath}">
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
									<div class="col-lg-3">
						   				<label>Department</label>
						   				<span>
								            <select class="form-control" id="studentDepartment">
									            <option value="" disabled selected>Select Department</option>
									            	{foreach from=$department key=departId item=i}
									               		 <option value="{$i.department_code}">{$i.department_name}</option>
									               	{/foreach}
									        </select>
								        </span>
								    </div>
								    <div class="col-lg-3">
							        <label>Year</label>
						            <span>
							            <select class="form-control" id="studentYear">
							               <option value="" disabled selected>Select Year</option>
							               	{foreach from=$year key=yearId item=i}
							               		 <option value="{$i.year_code}">{$i.year}</option>
							               	{/foreach}
							            </select>
						            </span>
						          	</div>
						          	<div class="col-lg-3">
						            <label>Semester</label>
						            <span>
							            <select class="form-control" id="studentYear">
							               <option value="" disabled selected>Select Semester</option>
							               	{foreach from=$year key=yearId item=i}
							               		 <option value="{$i.year_code}">{$i.year}</option>
							               	{/foreach}
							            </select>
						            </span>
						            </div>
						            <div class="col-lg-3">
						             <span>
							            <button class="btn btn-primary" onclick="uploadStudentProfile()"  style="margin-top: 10%"><i class="fa fa-upload"></i> Upload</button>
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
	      		<input type="text" class="form-control" id="department_name">
	      	</div> 
      	</div>
      	<br>
      	<div class="row">
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