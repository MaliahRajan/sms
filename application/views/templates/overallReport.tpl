<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-pie-chart"></i> Overall Report</h3>
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
  	        <label style="margin-left:10px">Year</label>
  	        <span style="margin-left:10px">
  	            <select class="cs-select cs-skin-elastic" id="studentYear">
  	               <option value="" disabled selected>Select Year</option>
  	               	{foreach from=$year key=yearId item=i}
  	               		 <option value="{$i.year_code}">{$i.year}</option>
  	               	{/foreach}
  	            </select>
  	        </span>
            <label style="margin-left:10px">Semester</label>
            <span style="margin-left:10px">
                <select class="cs-select cs-skin-elastic" id="studentYear">
                   <option value="" disabled selected>Select Semester</option>
                    {foreach from=$year key=yearId item=i}
                       <option value="{$i.year_code}">{$i.year}</option>
                    {/foreach}
                </select>
            </span>
  	         <span style="margin-left:15px">
  	        <button type="button" class="btn btn-primary" onclick="fetchExamDetails()"><i class="fa fa-file-text"></i> Fetch Report</button>
  	          <!--   <button class="btn btn-primary" style="margin-left:10px" onclick="viewStudent()">Fetch Report</button> -->
  	        </span>
  		</div>
  </div>
</div>  
 <div id="overallReportDiv"></div>
<!-- Modal -->
<div id="examModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Overall Report</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
      			<div class="container-fluid">
    				<div class="form-group">
    		        <label style="margin-left:80px">Choose Exams  </label>
    		        <select id="ms" multiple="multiple">
    		        </select>
    			</div>
    			<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> close</button>
    			<button type="button" class="btn btn-success pull-right" onclick="overallFetchedReport()"><i class="fa fa-file-text"></i> Fetch Report</button>
    		</div> 
      	</div>
      </div>
  </div>
</div>
</div>		

