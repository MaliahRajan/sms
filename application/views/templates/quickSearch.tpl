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
					            <button class="btn btn-primary" style="margin-left:10px" onclick="viewStudent()"><i class="fa fa-search"></i> Search</button>
				            </span>
						</div>
					</div>
			</div>
		</div>
	</div>

</div>