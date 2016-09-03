<?php
/*%%SmartyHeaderCode:75994052456409bea57c084_90381335%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dbec009ee2653ba96bade65210572d2f3167c13' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/studentList.tpl',
      1 => 1446990578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75994052456409bea57c084_90381335',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'studentProfile' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56409bea601698_07811858',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56409bea601698_07811858')) {
function content_56409bea601698_07811858 ($_smarty_tpl) {
?>
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
                                                          <tr>
                                <td>1</td>
                                <td>Maliah Rajan M</td>
                                <td>112811104026</td>
                                <td>8870425165</td>
                                <td>9987123012</td>
                                <td>104,chennai.</td>
                                <td><button class="btn btn-primary" onclick="openModal('studentModalNo1')"><span class="glyphicon glyphicon-edit"></span></button></td>
                                <td><button class="btn btn-primary" onclick="xajax_getStudentReport(1)"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                              </tr>
                                                          <tr>
                                <td>2</td>
                                <td>Manikandan M</td>
                                <td>112811104027</td>
                                <td>7755993325</td>
                                <td>7771126633</td>
                                <td>15,nkv street ,kavarepettai.</td>
                                <td><button class="btn btn-primary" onclick="openModal('studentModalNo2')"><span class="glyphicon glyphicon-edit"></span></button></td>
                                <td><button class="btn btn-primary" onclick="xajax_getStudentReport(2)"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                              </tr>
                                                          <tr>
                                <td>3</td>
                                <td>Manoj S</td>
                                <td>112811104028</td>
                                <td>9985241485</td>
                                <td>9982222214</td>
                                <td>255,vivekanadha street,chennai.</td>
                                <td><button class="btn btn-primary" onclick="openModal('studentModalNo3')"><span class="glyphicon glyphicon-edit"></span></button></td>
                                <td><button class="btn btn-primary" onclick="xajax_getStudentReport(3)"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                              </tr>
                                                          <tr>
                                <td>4</td>
                                <td>Naresh P</td>
                                <td>112811104029</td>
                                <td>8875226699</td>
                                <td>8870425622</td>
                                <td>15,nkv street ,kavarepettai.</td>
                                <td><button class="btn btn-primary" onclick="openModal('studentModalNo4')"><span class="glyphicon glyphicon-edit"></span></button></td>
                                <td><button class="btn btn-primary" onclick="xajax_getStudentReport(4)"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                              </tr>
                                                          <tr>
                                <td>5</td>
                                <td>Nirmal Kumar K</td>
                                <td>112811104030</td>
                                <td>7771126633</td>
                                <td>7771126633</td>
                                <td>255,vivekanadha street,chennai.</td>
                                <td><button class="btn btn-primary" onclick="openModal('studentModalNo5')"><span class="glyphicon glyphicon-edit"></span></button></td>
                                <td><button class="btn btn-primary" onclick="xajax_getStudentReport(5)"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                              </tr>
                                                          <tr>
                                <td>6</td>
                                <td>Praveen V</td>
                                <td>112811104031</td>
                                <td>9982222214</td>
                                <td>9982222214</td>
                                <td>22,chennai.</td>
                                <td><button class="btn btn-primary" onclick="openModal('studentModalNo6')"><span class="glyphicon glyphicon-edit"></span></button></td>
                                <td><button class="btn btn-primary" onclick="xajax_getStudentReport(6)"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                              </tr>
                                                          <tr>
                                <td>7</td>
                                <td>Praneeth R S</td>
                                <td>112811104032</td>
                                <td>8870425622</td>
                                <td>8870425622</td>
                                <td>15,nkv street ,kavarepettai.</td>
                                <td><button class="btn btn-primary" onclick="openModal('studentModalNo7')"><span class="glyphicon glyphicon-edit"></span></button></td>
                                <td><button class="btn btn-primary" onclick="xajax_getStudentReport(7)"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                              </tr>
                                                          <tr>
                                <td>8</td>
                                <td>Santhosh L</td>
                                <td>112811104033</td>
                                <td>9621455821</td>
                                <td>7771126633</td>
                                <td>255,vivekanadha street,chennai.</td>
                                <td><button class="btn btn-primary" onclick="openModal('studentModalNo8')"><span class="glyphicon glyphicon-edit"></span></button></td>
                                <td><button class="btn btn-primary" onclick="xajax_getStudentReport(8)"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                              </tr>
                                                          <tr>
                                <td>9</td>
                                <td>Sidharth M</td>
                                <td>112811104034</td>
                                <td>8876214561</td>
                                <td>9982222214</td>
                                <td>22,chennai.</td>
                                <td><button class="btn btn-primary" onclick="openModal('studentModalNo9')"><span class="glyphicon glyphicon-edit"></span></button></td>
                                <td><button class="btn btn-primary" onclick="xajax_getStudentReport(9)"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                              </tr>
                                                          <tr>
                                <td>10</td>
                                <td>Yuvaraj Shingh</td>
                                <td>112811104035</td>
                                <td>9987123012</td>
                                <td>7771126633</td>
                                <td>255,vivekanadha street,chennai.</td>
                                <td><button class="btn btn-primary" onclick="openModal('studentModalNo10')"><span class="glyphicon glyphicon-edit"></span></button></td>
                                <td><button class="btn btn-primary" onclick="xajax_getStudentReport(10)"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                              </tr>
                                                  </tbody>
                 </table>
            </div>
            </div>
        </div>
</div>
<div id="studentModalNo1" class="modal fade" role="dialog">
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
                        <td> <input type="text" id="studentName1" class="form-control" value ="Maliah Rajan M"></td>
                      </tr>
                      <tr>
                        <td>Registration No</td>
                        <td><input type="text" id="studentReg1" class="form-control" value ="112811104026"></td>
                      </tr>
                      <tr>
                        <td>Contact No</td>
                        <td> <input type="text" id="studentCont1" class="form-control" value ="8870425165"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No alt</td>
                        <td> <input type="text" id="studentContAlt1" class="form-control" value ="9987123012"></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><textarea id="studentAddress1" class="form-control">104,chennai.</textarea></td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       <button class="btn btn-info" style="margin:0px;padding:2px" onclick="resetModal('studentModalNo1')"><i class="fa fa-refresh"></i>  Reset</button>
                        <span class="pull-right">
                           <button class="btn btn-success" style="margin:0px;padding:2px" onclick="saveStudentProfile(1)"><i class="fa fa-floppy-o"></i>  Save</button> 
                        </span>
                    </div>
            
          </div>
        </div>  
    </div>

  </div>
</div>
<div id="studentModalNo2" class="modal fade" role="dialog">
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
                        <td> <input type="text" id="studentName2" class="form-control" value ="Manikandan M"></td>
                      </tr>
                      <tr>
                        <td>Registration No</td>
                        <td><input type="text" id="studentReg2" class="form-control" value ="112811104027"></td>
                      </tr>
                      <tr>
                        <td>Contact No</td>
                        <td> <input type="text" id="studentCont2" class="form-control" value ="7755993325"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No alt</td>
                        <td> <input type="text" id="studentContAlt2" class="form-control" value ="7771126633"></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><textarea id="studentAddress2" class="form-control">15,nkv street ,kavarepettai.</textarea></td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       <button class="btn btn-info" style="margin:0px;padding:2px" onclick="resetModal('studentModalNo2')"><i class="fa fa-refresh"></i>  Reset</button>
                        <span class="pull-right">
                           <button class="btn btn-success" style="margin:0px;padding:2px" onclick="saveStudentProfile(2)"><i class="fa fa-floppy-o"></i>  Save</button> 
                        </span>
                    </div>
            
          </div>
        </div>  
    </div>

  </div>
</div>
<div id="studentModalNo3" class="modal fade" role="dialog">
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
                        <td> <input type="text" id="studentName3" class="form-control" value ="Manoj S"></td>
                      </tr>
                      <tr>
                        <td>Registration No</td>
                        <td><input type="text" id="studentReg3" class="form-control" value ="112811104028"></td>
                      </tr>
                      <tr>
                        <td>Contact No</td>
                        <td> <input type="text" id="studentCont3" class="form-control" value ="9985241485"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No alt</td>
                        <td> <input type="text" id="studentContAlt3" class="form-control" value ="9982222214"></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><textarea id="studentAddress3" class="form-control">255,vivekanadha street,chennai.</textarea></td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       <button class="btn btn-info" style="margin:0px;padding:2px" onclick="resetModal('studentModalNo3')"><i class="fa fa-refresh"></i>  Reset</button>
                        <span class="pull-right">
                           <button class="btn btn-success" style="margin:0px;padding:2px" onclick="saveStudentProfile(3)"><i class="fa fa-floppy-o"></i>  Save</button> 
                        </span>
                    </div>
            
          </div>
        </div>  
    </div>

  </div>
</div>
<div id="studentModalNo4" class="modal fade" role="dialog">
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
                        <td> <input type="text" id="studentName4" class="form-control" value ="Naresh P"></td>
                      </tr>
                      <tr>
                        <td>Registration No</td>
                        <td><input type="text" id="studentReg4" class="form-control" value ="112811104029"></td>
                      </tr>
                      <tr>
                        <td>Contact No</td>
                        <td> <input type="text" id="studentCont4" class="form-control" value ="8875226699"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No alt</td>
                        <td> <input type="text" id="studentContAlt4" class="form-control" value ="8870425622"></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><textarea id="studentAddress4" class="form-control">15,nkv street ,kavarepettai.</textarea></td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       <button class="btn btn-info" style="margin:0px;padding:2px" onclick="resetModal('studentModalNo4')"><i class="fa fa-refresh"></i>  Reset</button>
                        <span class="pull-right">
                           <button class="btn btn-success" style="margin:0px;padding:2px" onclick="saveStudentProfile(4)"><i class="fa fa-floppy-o"></i>  Save</button> 
                        </span>
                    </div>
            
          </div>
        </div>  
    </div>

  </div>
</div>
<div id="studentModalNo5" class="modal fade" role="dialog">
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
                        <td> <input type="text" id="studentName5" class="form-control" value ="Nirmal Kumar K"></td>
                      </tr>
                      <tr>
                        <td>Registration No</td>
                        <td><input type="text" id="studentReg5" class="form-control" value ="112811104030"></td>
                      </tr>
                      <tr>
                        <td>Contact No</td>
                        <td> <input type="text" id="studentCont5" class="form-control" value ="7771126633"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No alt</td>
                        <td> <input type="text" id="studentContAlt5" class="form-control" value ="7771126633"></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><textarea id="studentAddress5" class="form-control">255,vivekanadha street,chennai.</textarea></td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       <button class="btn btn-info" style="margin:0px;padding:2px" onclick="resetModal('studentModalNo5')"><i class="fa fa-refresh"></i>  Reset</button>
                        <span class="pull-right">
                           <button class="btn btn-success" style="margin:0px;padding:2px" onclick="saveStudentProfile(5)"><i class="fa fa-floppy-o"></i>  Save</button> 
                        </span>
                    </div>
            
          </div>
        </div>  
    </div>

  </div>
</div>
<div id="studentModalNo6" class="modal fade" role="dialog">
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
                        <td> <input type="text" id="studentName6" class="form-control" value ="Praveen V"></td>
                      </tr>
                      <tr>
                        <td>Registration No</td>
                        <td><input type="text" id="studentReg6" class="form-control" value ="112811104031"></td>
                      </tr>
                      <tr>
                        <td>Contact No</td>
                        <td> <input type="text" id="studentCont6" class="form-control" value ="9982222214"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No alt</td>
                        <td> <input type="text" id="studentContAlt6" class="form-control" value ="9982222214"></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><textarea id="studentAddress6" class="form-control">22,chennai.</textarea></td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       <button class="btn btn-info" style="margin:0px;padding:2px" onclick="resetModal('studentModalNo6')"><i class="fa fa-refresh"></i>  Reset</button>
                        <span class="pull-right">
                           <button class="btn btn-success" style="margin:0px;padding:2px" onclick="saveStudentProfile(6)"><i class="fa fa-floppy-o"></i>  Save</button> 
                        </span>
                    </div>
            
          </div>
        </div>  
    </div>

  </div>
</div>
<div id="studentModalNo7" class="modal fade" role="dialog">
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
                        <td> <input type="text" id="studentName7" class="form-control" value ="Praneeth R S"></td>
                      </tr>
                      <tr>
                        <td>Registration No</td>
                        <td><input type="text" id="studentReg7" class="form-control" value ="112811104032"></td>
                      </tr>
                      <tr>
                        <td>Contact No</td>
                        <td> <input type="text" id="studentCont7" class="form-control" value ="8870425622"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No alt</td>
                        <td> <input type="text" id="studentContAlt7" class="form-control" value ="8870425622"></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><textarea id="studentAddress7" class="form-control">15,nkv street ,kavarepettai.</textarea></td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       <button class="btn btn-info" style="margin:0px;padding:2px" onclick="resetModal('studentModalNo7')"><i class="fa fa-refresh"></i>  Reset</button>
                        <span class="pull-right">
                           <button class="btn btn-success" style="margin:0px;padding:2px" onclick="saveStudentProfile(7)"><i class="fa fa-floppy-o"></i>  Save</button> 
                        </span>
                    </div>
            
          </div>
        </div>  
    </div>

  </div>
</div>
<div id="studentModalNo8" class="modal fade" role="dialog">
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
                        <td> <input type="text" id="studentName8" class="form-control" value ="Santhosh L"></td>
                      </tr>
                      <tr>
                        <td>Registration No</td>
                        <td><input type="text" id="studentReg8" class="form-control" value ="112811104033"></td>
                      </tr>
                      <tr>
                        <td>Contact No</td>
                        <td> <input type="text" id="studentCont8" class="form-control" value ="9621455821"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No alt</td>
                        <td> <input type="text" id="studentContAlt8" class="form-control" value ="7771126633"></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><textarea id="studentAddress8" class="form-control">255,vivekanadha street,chennai.</textarea></td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       <button class="btn btn-info" style="margin:0px;padding:2px" onclick="resetModal('studentModalNo8')"><i class="fa fa-refresh"></i>  Reset</button>
                        <span class="pull-right">
                           <button class="btn btn-success" style="margin:0px;padding:2px" onclick="saveStudentProfile(8)"><i class="fa fa-floppy-o"></i>  Save</button> 
                        </span>
                    </div>
            
          </div>
        </div>  
    </div>

  </div>
</div>
<div id="studentModalNo9" class="modal fade" role="dialog">
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
                        <td> <input type="text" id="studentName9" class="form-control" value ="Sidharth M"></td>
                      </tr>
                      <tr>
                        <td>Registration No</td>
                        <td><input type="text" id="studentReg9" class="form-control" value ="112811104034"></td>
                      </tr>
                      <tr>
                        <td>Contact No</td>
                        <td> <input type="text" id="studentCont9" class="form-control" value ="8876214561"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No alt</td>
                        <td> <input type="text" id="studentContAlt9" class="form-control" value ="9982222214"></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><textarea id="studentAddress9" class="form-control">22,chennai.</textarea></td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       <button class="btn btn-info" style="margin:0px;padding:2px" onclick="resetModal('studentModalNo9')"><i class="fa fa-refresh"></i>  Reset</button>
                        <span class="pull-right">
                           <button class="btn btn-success" style="margin:0px;padding:2px" onclick="saveStudentProfile(9)"><i class="fa fa-floppy-o"></i>  Save</button> 
                        </span>
                    </div>
            
          </div>
        </div>  
    </div>

  </div>
</div>
<div id="studentModalNo10" class="modal fade" role="dialog">
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
                        <td> <input type="text" id="studentName10" class="form-control" value ="Yuvaraj Shingh"></td>
                      </tr>
                      <tr>
                        <td>Registration No</td>
                        <td><input type="text" id="studentReg10" class="form-control" value ="112811104035"></td>
                      </tr>
                      <tr>
                        <td>Contact No</td>
                        <td> <input type="text" id="studentCont10" class="form-control" value ="9987123012"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No alt</td>
                        <td> <input type="text" id="studentContAlt10" class="form-control" value ="7771126633"></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><textarea id="studentAddress10" class="form-control">255,vivekanadha street,chennai.</textarea></td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       <button class="btn btn-info" style="margin:0px;padding:2px" onclick="resetModal('studentModalNo10')"><i class="fa fa-refresh"></i>  Reset</button>
                        <span class="pull-right">
                           <button class="btn btn-success" style="margin:0px;padding:2px" onclick="saveStudentProfile(10)"><i class="fa fa-floppy-o"></i>  Save</button> 
                        </span>
                    </div>
            
          </div>
        </div>  
    </div>

  </div>
</div>
<div id="ReportModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" id="ReportModalContent">
    
    </div>

  </div>
</div><?php }
}
?>