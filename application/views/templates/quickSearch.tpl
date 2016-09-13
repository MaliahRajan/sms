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
							            	{foreach from=$department key=departId item=i}
							               		 <option value="{$i.department_code}">{$i.department_name}</option>
							               	{/foreach}
							        </select>
					        </div>
					        <div class="col-lg-3">
					        	<label>Year</label>
					            <select class="form-control" id="studentYear">
					               	{foreach from=$year key=yearId item=i}
					               		 <option value="{$i.year_code}">{$i.year}</option>
					               	{/foreach}
					            </select>
				            </div>
				            <div class="col-lg-3">
				            	<label>Semester</label>
					            <select class="form-control" id="studentYear">
					               	{foreach from=$year key=yearId item=i}
					               		 <option value="{$i.year_code}">{$i.year}</option>
					               	{/foreach}
					            </select>
					       	</div>
					       	<div class="col-lg-3">
					       		 <button class="btn btn-primary" style="margin-top: 10%" onclick="viewStudent()"><i class="fa fa-search"></i> Search</button>
				            </div>
						</div>
					</div>
			</div>
		</div>
</div>