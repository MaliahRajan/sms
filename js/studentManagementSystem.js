function DataTable()
{
     $('#StudentList').DataTable( {
		 		"bDestroy": true,
				"iDisplayLength": 3,
				"bStateSave": false,
				"oLanguage": {
				"sLengthMenu": 'Show <select class="form-control" data-style="btn-primary"><option value="3">3</option><option value="5">5</option><option value="10">10</option><option value="50">50</option><option value="100">100</option><option value="200">200</option></select>'
			},
				"aaSorting": [[0,'asc']]
		});

}

function quickSearch()
{
	(function() {
		[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
			new SelectFx(el);
		} );
	})();
}
function uploadMarklist()
{
	$('.uploadMarklist').filestyle({
		buttonName : 'btn-primary'
	});
	  $('.spinner .btn:first-of-type').on('click', function() {
	  	var value = parseInt($('.spinner input').val(), 10) + 10;
	  	if(value > 100)
	  	{
	  		customAlertMessage('Invalid Input','Please Select Minimum Passmark Between 30-100','warning');
	  		return fasle;
	  	}
	  	else
	  	{
	  		$('.spinner input').val(value);
	  	}
	  });
	  $('.spinner .btn:last-of-type').on('click', function() {
	  	var value = parseInt($('.spinner input').val(), 10) - 10;
	  	if(value < 30)
	  	{
	  		customAlertMessage('Invalid Input','Please Select Minimum Passmark Between 30-100','warning');
	  		return fasle;
	  	}
	  	else
	  	{
	  		$('.spinner input').val(value);
	  	}
	  });
}
function clearDiv(divID,value)
{	
	if(value == 1)
	{
		$(document).ready(function() {
			$('#ms option').each(function(index, option) {
		        $(option).remove();
		    });
		 });
	}
	else
	{
		document.getElementById(''+divID).innerHTML = '';
	}
}
function uploadStudentProfile()
{
	$(document).ready(function() {

		var uploadStudentProfile = new FormData();
		var m_data = new FormData();
		var appPath = document.getElementById('appPath').value;
		var basePath = document.getElementById('basePath').value;
		var uploadPath = basePath+'/excel_Uploads/';
		uploadStudentProfile['fileName'] = document.getElementById('uploadStudentList').value;

		if(uploadStudentProfile['fileName'] == '')
		{
			customAlertMessage('File Missing','Please select a valid Excel File','warning');
			return false;
		}
		else
		{
			if(getFileExtension(uploadStudentProfile['fileName']) == 'xls' || getFileExtension(uploadStudentProfile['fileName']) == 'xlsx')
			{
				uploadStudentProfile['studentDepartment'] = document.getElementById('studentDepartment').value;
				if(uploadStudentProfile['studentDepartment'] == '')
				{
					customAlertMessage('Deparment Empty','Please Select the Deparment','warning');
					return false;
				}
				uploadStudentProfile['studentYear'] = document.getElementById('studentYear').value;
				if(uploadStudentProfile['studentYear'] == '')
				{
					customAlertMessage('Year Empty','Please Select the Year','warning');
					return false;
				}
				else
				{	

					m_data.append('uploadPath', uploadPath);
					m_data.append('uploadStudentList', $('input[name=uploadStudentList]')[0].files[0]);
					m_data.append('fileName', uploadStudentProfile['fileName']);

					$.ajax({
		              url: 'application/libraries/fileUpload/Fileupload.php',
		              data: m_data,
		              processData: false,
		              contentType: false,
		              type: 'POST',
		              dataType:'json',
		              success: function(response){
		              		if(response.status=='success')
		              		{
		              			xajax_uploadStudentProfile(uploadStudentProfile);
		              		}
		              }
		            });

				}
			}
			else
			{
				customAlertMessage('Invalid Excel Format','Please select a valid Excel File','warning');
				return false;
			}
		}
	});
}
function login()
{
	var loginCredentials = [];
	loginCredentials[0] = document.getElementById('userName').value;
	if(loginCredentials[0] == '')
	{
		customAlertMessage('User name is Empty','Please Enter User name','warning');
		return false;
	}
	loginCredentials[1] = document.getElementById('password').value;
	if(loginCredentials[1] == '')
	{
		customAlertMessage('Password is Empty','Please Enter Password','warning');
		return false;
	}
	else
	{	
		xajax_login(loginCredentials);
	}
}
function viewStudent()
{
	var viewStudent = [];
	viewStudent[0] = document.getElementById('studentDepartment').value;
	if(viewStudent[0] == '')
	{
		customAlertMessage('Deparment Empty','Please Select the Deparment','warning');
		return false;
	}
	viewStudent[1] = document.getElementById('studentYear').value;
	if(viewStudent[1] == '')
	{
		customAlertMessage('Year Empty','Please Select the Year','warning');
		return false;
	}
	else
	{	
		xajax_viewStudent(viewStudent);
	}
}
function customAlertMessage(msgTitle,msg,msgType)
{
    swal(""+msgTitle, ""+msg, ""+msgType);
}
function resetModal(modalID)
{
	document.getElementById(''+modalID).innerHTML = backUp;
	$('#'+modalID).modal('hide');
	 setTimeout(function() {
        openModal(modalID);
    },400);
}
//global Variable
var backUp;
function openModal(modalID)
{
	backUp = document.getElementById(''+modalID).innerHTML;
	$('#'+modalID).modal('show');
}
function getFileExtension(filename) 
{
	return filename.split('.').pop();
}
function modalHide(modalID)
{
	$('#'+modalID).modal('hide');
}
function saveStudentProfile(student_profile_no)
{
	var studentData = new FormData();
	studentData['Name'] = document.getElementById('studentName'+student_profile_no).value;
	if(studentData['Name'] == '')
	{
		customAlertMessage('Name Empty','Please Enter a valid Name','warning');
		return false;
	}
	studentData['registration_no'] = document.getElementById('studentReg'+student_profile_no).value;
	if(studentData['registration_no'] == '')
	{
		customAlertMessage('Registration Number Empty','Please Enter a valid Registration Number','warning');
		return false;
	}
	studentData['contact_no'] = document.getElementById('studentCont'+student_profile_no).value;
	if(studentData['contact_no'] == '')
	{
		customAlertMessage('Contact Empty','Please Enter a valide contact','warning');
		return false;	
	}
	studentData['contact_no_alt'] = document.getElementById('studentContAlt'+student_profile_no).value;
	if(studentData['contact_no_alt'] == '')
	{
		customAlertMessage('Alternate Contact Empty','Please Enter a valide alternate contact','warning');
		return false;
	}
	studentData['Address'] = document.getElementById('studentAddress'+student_profile_no).value;
	if(studentData['Address'] == '')
	{
		customAlertMessage('Address Empty','Please Enter a valid address','warning');
		return false;
	}
	else
	{
		xajax_saveStudentProfile(student_profile_no,studentData);
	}
}
function addExam()
{
	var examName = new FormData();
	examName['exams'] = document.getElementById('ExamName').value;
	examName['minimum_pass_mark'] = document.getElementById('minimumPassMark').value;
	if(examName['exams'] == '')
	{
		customAlertMessage('Exam name Empty','Please Enter a Exam name','warning');
		return false;
	}
	else
	{
		xajax_addExam(examName);
	}
}
function addDepartment(moduleName)
{
	var deparment = new FormData();
	deparment['department_name'] = document.getElementById('department_name').value;
	if(deparment['department_name'] == '')
	{
		customAlertMessage('Deparment name Empty','Please Enter a valid Deparment','warning');
		return false;
	}
	else
	{	
		if(moduleName == 1)
		{
			xajax_addDepartment(deparment,moduleName);
		}
		else
		{
			xajax_addDepartment(deparment);
		}
	}
}
function uploadStudentMarklist()
{
	$(document).ready(function() {

		var uploadStudentMarklist = new FormData();
		var m_data = new FormData();
		var appPath = document.getElementById('appPath').value;
		var basePath = document.getElementById('basePath').value;
		var uploadPath = basePath+'/excel_Uploads/marklist/';

		uploadStudentMarklist['fileName'] = document.getElementById('uploadMarklist').value;

		if(uploadStudentMarklist['fileName'] == '')
		{
			customAlertMessage('File Missing','Please select a valid Excel File','warning');
			return false;
		}
		else
		{
			if(getFileExtension(uploadStudentMarklist['fileName']) == 'xls' || getFileExtension(uploadStudentMarklist['fileName']) == 'xlsx')
			{
				uploadStudentMarklist['studentDepartment'] = document.getElementById('studentDepartment').value;
				if(uploadStudentMarklist['studentDepartment'] == '')
				{
					customAlertMessage('Deparment Empty','Please Select the Deparment','warning');
					return false;
				}
				uploadStudentMarklist['studentExam'] = document.getElementById('studentExam').value;
				if(uploadStudentMarklist['studentExam'] == '')
				{
					customAlertMessage('Exam Name Empty','Please Select the Exam','warning');
					return false;
				}
				uploadStudentMarklist['studentYear'] = document.getElementById('studentYear').value;
				if(uploadStudentMarklist['studentYear'] == '')
				{
					customAlertMessage('Year Empty','Please Select the Year','warning');
					return false;
				}
				else
				{	

					m_data.append('uploadPath', uploadPath);
					m_data.append('uploadStudentList', $('input[name=uploadMarklist]')[0].files[0]);
					m_data.append('fileName', uploadStudentMarklist['fileName']);

					$.ajax({
		              url: 'application/libraries/fileUpload/Fileupload.php',
		              data: m_data,
		              processData: false,
		              contentType: false,
		              type: 'POST',
		              dataType:'json',
		              success: function(response){
		              		if(response.status=='success')
		              		{
		              			xajax_uploadStudentMarklist(uploadStudentMarklist);
		              		}
		              }
		            });

				}
			}
			else
			{
				customAlertMessage('Invalid Excel Format','Please select a valid Excel File','warning');
				return false;
			}
		}
	});
}
function injectData(id,data)
{
	document.getElementById(''+id).innerHTML = data;
}
function fusionChartPlugin(data)
{
   var revenueChart = new FusionCharts(data).render();
}
function initiateChart(dataValue,caption)
{
	var count =  dataValue.length;
	for(i=0;i<count;i++)
	{
		 var data =  {
            type: 'column2d',
            renderAt: 'chart-container'+i,
            width: '450',
            height: '350',
            dataFormat: 'json',
            dataSource: {
                "chart": {
                    "caption": caption[i],
                    "xAxisName": "Subjects",
                    "yAxisName": "Total Marks",
                    "paletteColors": "#0075c2",
                    "bgColor": "#ffffff",
                    "borderAlpha": "20",
                    "canvasBorderAlpha": "0",
                    "usePlotGradientColor": "0",
                    "plotBorderAlpha": "10",
                    "placevaluesInside": "1",
                    "rotatevalues": "1",
                    "valueFontColor": "#ffffff",                
                    "showXAxisLine": "1",
                    "xAxisLineColor": "#999999",
                    "divlineColor": "#999999",               
                    "divLineIsDashed": "1",
                    "showAlternateHGridColor": "0",
                    "subcaptionFontBold": "0",
                    "subcaptionFontSize": "14"
                },            
                "data": dataValue[i],
                "trendlines": [
                    {
                        "line": [
                            {
                                "startvalue": "50",
                                "color": "#FF4F4F",
                                "valueOnRight": "1",
                                "displayvalue": "Pass Mark"
                            }
                        ]
                    }
                ]
            }
        };

		 	fusionChartPlugin(data);	        
	}
   
}
function initiateOverallReport(dataset,category)
{
	var data = {
        type: 'mscolumn2d',
        renderAt: 'overallReportDiv',
        width: '900',
        height: '400',
        dataFormat: 'json',
        dataSource: {
            "chart": {
/*                "caption": "Overall Mark Analysis",*/
                "xAxisname": "Subjects",
                "yAxisName": "Marks (In Percentage)",
                "plotFillAlpha" : "90",
                //Cosmetics
                "paletteColors" : "#0075C2,#F2C500,#F45B00,#1AAF5D,#EA4335,#7A00E5",
                "baseFontColor" : "#333333",
                "baseFont" : "Helvetica Neue,Arial",
                "captionFontSize" : "15",
                "subcaptionFontSize" : "20",
                "subcaptionFontBold" : "0",
                "showBorder" : "0",
                "bgColor" : "#ffffff",
                "showShadow" : "1",
                "canvasBgColor" : "#ffffff",
                "canvasBorderAlpha" : "1",
                "divlineAlpha" : "100",
                "divlineColor" : "#999999",
                "divlineThickness" : "1",
                "divLineIsDashed" : "1",
                "divLineDashLen" : "1",
                "divLineGapLen" : "1",
                "usePlotGradientColor" : "0",
                "showplotborder" : "0",
                "valueFontColor" : "#ffffff",
                "placeValuesInside" : "1",
                "showHoverEffect" : "1",
                "rotateValues" : "1",
                "showXAxisLine" : "1",
                "xAxisLineThickness" : "1",
                "xAxisLineColor" : "#999999",
                "showAlternateHGridColor" : "0",
                "legendBgAlpha" : "0",
                "legendBorderAlpha" : "0",
                "legendShadow" : "1",
                "legendItemFontSize" : "13",
                "legendItemFontColor" : "#666666"                
            },
            "categories": [
                {
                    "category": category 
                }
            ],
            "dataset": dataset,
           
        }
    };
	overallReportRender(data);
}
function overallReportRender(dataValue)
{
	 var overallReport = new FusionCharts(dataValue);
     overallReport.render();
}
function modalOpen(modalID)
{
	$('#'+modalID).modal('show');
}
function hideDiv(divID)
{
	document.getElementById(''+divID).style.display = 'none';
}
function clearSubDiv(divID)
{
	document.getElementById(''+divID).innerHTML = '';
	document.getElementById('xajaxSubContent').style.display = 'block';
}
function makeFocus(divID)
{	
	$(document).ready(function() {
			 $('html, body').animate({
		        scrollTop: $("#"+divID).offset().top
		    },2000);
	});
}
function multipleSelect()
{
	$(document).ready(function() {
	        $("#ms").multipleSelect({
	        filter: true
	    });
	});
}
function fetchExamDetails()
{
	var fetchExamDetails = new FormData();
	fetchExamDetails['studentDepartment'] = document.getElementById('studentDepartment').value;
	if(fetchExamDetails['studentDepartment'] == '')
	{
		customAlertMessage('Deparment Empty','Please Select the Deparment','warning');
		return false;
	}
	fetchExamDetails['studentYear'] = document.getElementById('studentYear').value;
	if(fetchExamDetails['studentYear'] == '')
	{
		customAlertMessage('Year Empty','Please Select the Year','warning');
		return false;
	}
	else
	{
		xajax_fetchExamDetails(fetchExamDetails);
	}
}
function overallFetchedReport()
{
	var selectedExamDetails = new FormData();
	selectedExamDetails['exam_code'] = $('select#ms').multipleSelect("getSelects");
	if(selectedExamDetails['exam_code'] == '')
	{
		customAlertMessage('Selection Empty','Please Select the Exams','warning');
		return false;
	}
	xajax_overallFetchedReport(selectedExamDetails);
}
function changeSemester(year)
{
	  var alphabets = ['First','Second','Third','Fourth','Fifth','Sixth','Seventh','Eighth'];
	  var semester = [];
	  var response = '';
	  year = year*2;
	  semester.push(year-1);
	  semester.push(year);
	  for(i=0;i<semester.length;i++)
	  {
	    response += '<option value="'+semester[i]+'">'+alphabets[semester[i]-1]+'Semester</option>';
	  }
	  $('#studentSemester').html(response);
}
