<?php
/*%%SmartyHeaderCode:12535583515642d200501d38_72589114%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d6e6442e034f094481f53395f3f7ebe6a97b3e8' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/overallReport.tpl',
      1 => 1447138147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12535583515642d200501d38_72589114',
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
  'unifunc' => 'content_5642d20053eac7_53969110',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5642d20053eac7_53969110')) {
function content_5642d20053eac7_53969110 ($_smarty_tpl) {
?>
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
  		            	  		               		 <option value="1">CSE</option>
  		               	  		        </select>
  	        </span>
  	        <label style="margin-left:10px">Year</label>
  	        <span style="margin-left:10px">
  	            <select class="cs-select cs-skin-elastic" id="studentYear">
  	               <option value="" disabled selected>Select Year</option>
  	               	  	               		 <option value="1">First Year</option>
  	               	  	               		 <option value="2">Second Year</option>
  	               	  	               		 <option value="3">Third Year</option>
  	               	  	               		 <option value="4">Final Year</option>
  	               	  	            </select>
  	        </span>
            <label style="margin-left:10px">Semester</label>
            <span style="margin-left:10px">
                <select class="cs-select cs-skin-elastic" id="studentYear">
                   <option value="" disabled selected>Select Semester</option>
                                           <option value="1">First Year</option>
                                           <option value="2">Second Year</option>
                                           <option value="3">Third Year</option>
                                           <option value="4">Final Year</option>
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

<?php }
}
?>