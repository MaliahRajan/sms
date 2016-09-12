<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-pie-chart"></i> Overall Report</h3>
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
  	          <button type="button" class="btn btn-primary" onclick="fetchExamDetails()" style="margin-top: 10%"><i class="fa fa-file-text"></i> Fetch</button>
  	          <!--   <button class="btn btn-primary" style="margin-left:10px" onclick="viewStudent()">Fetch Report</button> -->
  	        </div>
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
          			<button type="button" class="btn btn-success pull-right" onclick="overallFetchedReport()"><i class="fa fa-file-text"></i> Fetch</button>
        		</div> 
      	</div>
      </div>
  </div>
</div>
</div>		

