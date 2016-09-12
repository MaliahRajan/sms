<div class="row">
		<input type="hidden" id="appPath" value="{$appPath}">
		<input type="hidden" id="basePath" value="{$basePath}">
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
							<br>
							<div class="row">
								<div class="col-lg-3">
									<label>Department</label>
						            <select class="form-control" id="studentDepartment">
						               	{foreach from=$department key=departId item=i}
						               		 <option value="{$i.department_code}">{$i.department_name}</option>
						               	{/foreach}
						            </select>
						        </div>
						        <div class="col-lg-2">
						        	<label>Year</label>
						            <select class="form-control" id="studentYear">
						               	{foreach from=$year key=yearId item=i}
						               		 <option value="{$i.year_code}">{$i.year}</option>
						               	{/foreach}
						            </select>
						        </div>
						        <div class="col-lg-2">
						       		 <label>Semester</label>
						            <select class="form-control" id="studentYear">
						               	{foreach from=$year key=yearId item=i}
						               		 <option value="{$i.year_code}">{$i.year}</option>
						               	{/foreach}
						            </select>
						        </div>
						        <div class="col-lg-3">
						        	<label>Exam</label>
						            <select class="form-control" id="studentExam">
						               	{foreach from=$exams key=exam item=i}
						               		 <option value="{$i.exam_code}">{$i.exams}</option>
						               	{/foreach}
						            </select>
					            </div>
					            <div class="col-lg-2">
									<button class="btn btn-primary" style="margin-top:17%" onclick="uploadStudentMarklist()"><i class="fa fa-upload"></i> Upload</button>				</div>
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
</div>