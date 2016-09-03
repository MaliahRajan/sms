<div class="row">
			<div class="container-fluid">
				<div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title inline">
            Student Profile
            <div><button class="btn btn-danger pull-right" style="margin:-21px -4px 0px;padding:2px" onclick="clearDiv('xajaxSubContent')"><span class="glyphicon glyphicon-remove" style="padding:0px"></span></button></div>
          </div>
        </div>
				<div class="panel-body">
     			<table class="table table-striped table-bordered table-hover dt-responsive" id="StudentList">
                      <thead>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Registration No</th>
                        <th>Contact No</th>
                        <th>Contact No 2</th>
                        <th>Address</th>
                        <th style="width:50px">Edit</th>
                        <th style="width:10px">Report</th>
                      </thead>
                      <tbody>
                            {foreach from=$studentProfile key=studentId item=i}
                              <tr>
                                <td>{$i.student_profile_no}</td>
                                <td>{$i.Name}</td>
                                <td>{$i.registration_no}</td>
                                <td>{$i.contact_no}</td>
                                <td>{$i.contact_no_alt}</td>
                                <td>{$i.Address}</td>
                                <td><button class="btn btn-primary" onclick="openModal('studentModalNo{$i.student_profile_no}')"><span class="glyphicon glyphicon-edit"></span></button></td>
                                <td><button class="btn btn-primary" onclick="xajax_getStudentReport({$i.student_profile_no})"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                              </tr>
                            {/foreach}
                      </tbody>
                 </table>
            </div>
            </div>
        </div>
</div>
{foreach from=$studentProfile key=studentId item=i}
<div id="studentModalNo{$i.student_profile_no}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-pencil-square-o"></i>
Edit Student Profile <button class="btn btn-danger pull-right" data-dismiss="modal" style="margin:0px;padding:2px"><span class="glyphicon glyphicon-remove" style="padding:0px"></span></button></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/LAVC_Portal_Menu_Student.png" class="img-circle img-responsive">

                  </br>

                 </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td> <input type="text" id="studentName{$i.student_profile_no}" class="form-control" value ="{$i.Name}"></td>
                      </tr>
                      <tr>
                        <td>Registration No</td>
                        <td><input type="text" id="studentReg{$i.student_profile_no}" class="form-control" value ="{$i.registration_no}"></td>
                      </tr>
                      <tr>
                        <td>Contact No</td>
                        <td> <input type="text" id="studentCont{$i.student_profile_no}" class="form-control" value ="{$i.contact_no}"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No alt</td>
                        <td> <input type="text" id="studentContAlt{$i.student_profile_no}" class="form-control" value ="{$i.contact_no_alt}"></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><textarea id="studentAddress{$i.student_profile_no}" class="form-control">{$i.Address}</textarea></td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       <button class="btn btn-info" style="margin:0px;padding:2px" onclick="resetModal('studentModalNo{$i.student_profile_no}')"><i class="fa fa-refresh"></i>  Reset</button>
                        <span class="pull-right">
                           <button class="btn btn-success" style="margin:0px;padding:2px" onclick="saveStudentProfile({$i.student_profile_no})"><i class="fa fa-floppy-o"></i>  Save</button> 
                        </span>
                    </div>
            
          </div>
        </div>  
    </div>

  </div>
</div>
{/foreach}
<div id="ReportModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" id="ReportModalContent">
    
    </div>

  </div>
</div>