<?php
/*%%SmartyHeaderCode:456656768ca7eaed87_81015305%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9ecf818157208834d3fcba4394634cb7b820065' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sms\\application\\views\\templates\\overallReport.tpl',
      1 => 1447138146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '456656768ca7eaed87_81015305',
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
  'unifunc' => 'content_56768ca800e6b1_36999251',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56768ca800e6b1_36999251')) {
function content_56768ca800e6b1_36999251 ($_smarty_tpl) {
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