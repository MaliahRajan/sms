 <?php

	class Tjs_student_management_model extends CI_Model {

	        public function __construct()
	        {
	                $this->load->database();
	        }
	        public function getMenu($groupId)
			{	
				$finalMenu = array();
				$this->db->select('menu_id');
				$menuSql = "SELECT DISTINCT
								   mgm.menu_group_mapping_id,
								   m.menu_id,
								   m.menu_icon,
								   m.menu_name,
								   m.xajax_script
							FROM   
								   menu m,
								   menu_group_mapping mgm 
							WHERE  
								   m.menu_id = mgm.menu_id
							AND
								   mgm.group_id = ".$groupId."
							AND
								   mgm.status = 'y'
							AND    
								   m.status = 'y'";

				$query = $this->db->query($menuSql);
				$mainMenu =  $query->result_array();

				$subMenuSql = "SELECT DISTINCT

									  smgm.sub_menu_group_mapping_id, 
									  sm.sub_menu_id, 
									  sm.sub_menu_icon, 
									  sm.sub_menu_name, 
									  sm.xajax_script
							   FROM 
							   		  sub_menu sm,
							   		  sub_menu_group_mapping smgm,
							   		  menu_sub_menu_mapping msmm

							   WHERE 
							   		  sm.sub_menu_id = smgm.sub_menu_id

							   AND 
							   		  smgm.group_id = ".$groupId."
							   AND 
							   		  smgm.status = sm.status = msmm.status
							   AND 
							   		  msmm.menu_id = ";

				foreach ($mainMenu as $menukey => $menuValue) 
				{
					$finalMenu[$menukey]['menu_group_mapping_id'] = $menuValue['menu_group_mapping_id'];
					$finalMenu[$menukey]['menu_id'] = $menuValue['menu_id'];
					$finalMenu[$menukey]['menu_icon'] = $menuValue['menu_icon'];
					$finalMenu[$menukey]['menu_name'] = $menuValue['menu_name'];
					$finalMenu[$menukey]['xajax_script'] = $menuValue['xajax_script'];
					$Sql = $subMenuSql.$mainMenu[$menukey]['menu_id'];
					$query = $this->db->query($Sql);
					$subMenu =  $query->result_array();
					if(empty($subMenu))
					{
						$finalMenu[$menukey]['subMenu'] = 'N';
					}
					else
					{
						$finalMenu[$menukey]['subMenu'] = $subMenu;
					}
				}
				return $finalMenu;
			}
			public 	function searchArray($arrayValues, $field, $value)
			{
				foreach($arrayValues as $key => $array)
			    {
			      if ($array[$field] === $value)
			      {
			         return $key;
			      }

			    }
			}
			public function getConfig()
			{
				$query = $this->db->get_where('config', array('status' => 'y'));
				$configValues =  $query->result_array();
				return $configValues;
			}
	        public function login($userName,$password)
	        {
	        	$this->db->select('Name');
	        	$this->db->select('group_id');
				$query = $this->db->get_where('login', array('userName' => $userName,'password' => $password,'status' => 'y'));
			    $logindata =  $query->result_array();
			    $status = array();
			    if(empty($logindata))
			    {	
			    	$status[0]['status'] = 'n';
			    	return $status;
			    }
			    else
			    {
			    	$status[0]['status'] = 'y';
			    	$status[0]['Name'] = $logindata[0]['Name'];
			    	$status[0]['group_id'] = $logindata[0]['group_id'];
			    	return $status;
			    }
	        }
	        public function insertStudentProfile($department,$year,$data)
			{
				$this->db->select('depart_year_code');
				$query = $this->db->get_where('department_year_mapping', array('department_code' => $department,'year_code' => $year));
			    $depart_year_code =  $query->result_array();
			    $count = count($data);
			    foreach ($data as $key => $value) {
			    	$data[$key]['depart_year_code'] = $depart_year_code[0]['depart_year_code'];
			    }
			    $query = $this->db->get_where('student_profile', array('registration_no' => $data[1]['registration_no']));
				$studentData =  $query->result_array();
				if(empty($studentData))
				{
					$this->db->insert_batch('student_profile', $data);
					$status = 'success';
				}
				else
				{
					$status = 'warning';
				}
				return $status;
			}
			public function updateStudent($student_profile_no,$data)
			{
				//update Student
				$this->db->where('student_profile_no', $student_profile_no);
				$this->db->update('student_profile', $data);
				//select Student Profile 
				$this->db->select('depart_year_code');
				$query = $this->db->get_where('student_profile', array('student_profile_no' => $student_profile_no));
			    $depart_year_code =  $query->result_array();
			    $query = $this->db->get_where('student_profile', array('depart_year_code' => $depart_year_code[0]['depart_year_code']));
			    $student_profile =  $query->result_array();
			    return $student_profile;
			}
			public function addStudentList()
			{
				$query = $this->db->get('department_master');
				$department = $query->result_array();
				$query = $this->db->get('year_master');
				$year = $query->result_array();
				return array($department,$year);
			}
			public function viewStudent($department,$year)
			{
				$this->db->select('depart_year_code');
				$query = $this->db->get_where('department_year_mapping', array('department_code' => $department,'year_code' => $year));
			    $depart_year_code =  $query->result_array();
			    $query = $this->db->get_where('student_profile', array('depart_year_code' => $depart_year_code[0]['depart_year_code']));
			    $student_profile =  $query->result_array();
			    return $student_profile;
			}
			public function insertExam($examName)
			{
				$this->db->select('exam_code');
				$query = $this->db->get_where('exam_master', array('exams' => $examName['exams']));
			    $exam_code =  $query->result_array();
			    if(empty($exam_code))
			    {
			    	$this->db->insert('exam_master', $examName);
					$status = 'success';
			    }
			    else
			    {
			    	$status = 'failed';
			    }
			    return $status;
			}
			public function selectExam()
			{
				$query = $this->db->get('exam_master');
				$exams =  $query->result_array();
				return $exams;
			}
			public function insertMarklist($fileName,$department,$exam,$year)
			{
				$this->db->select('depart_year_code');
				$query = $this->db->get_where('department_year_mapping', array('department_code' => $department, 'year_code' => $year));
			    $depart_year_code =  $query->result_array();
			    $this->db->select('exam_department_code');
				$query = $this->db->get_where('exam_department_mapping', array('file_name' => $fileName,'depart_year_code' => $depart_year_code[0]['depart_year_code'], 'exam_code' => $exam));
			    $exam_department_code =  $query->result_array();
			    if(empty($exam_department_code))
			    {
			    	$this->db->insert('exam_department_mapping', array('file_name' => $fileName, 'depart_year_code' => $depart_year_code[0]['depart_year_code'], 'exam_code' => $exam));
					$status = 'success';
			    }
			    else
			    {
			    	$status = 'failed';
			    }
			    return $status;
			}
			public function insertDepartment($departmentName)
			{
				$this->db->select('department_code');
				$query = $this->db->get_where('department_master', array('department_name' => $departmentName['department_name']));
			    $department_code =  $query->result_array();
			    if(empty($department_code))
			    {
			    	$this->db->insert('department_master', $departmentName);
			    	$this->db->select('department_code');
					$query = $this->db->get_where('department_master', array('department_name' => $departmentName['department_name']));
				    $department_code =  $query->result_array();
				    $this->db->select('year_code');
				    $query = $this->db->get('year_master');
				   	$yearCodeArray =  $query->result_array();
				   	$count = count($yearCodeArray);
				   	for($i=0;$i<$count;$i++)
				   	{
				   		$this->db->set('year_code', $yearCodeArray[$i]['year_code']);
						$this->db->set('department_code', $department_code[0]['department_code']);
				   		$this->db->insert('department_year_mapping');
				   	}
					$status = 'success';
			    }
			    else
			    {
			    	$status = 'failed';
			    }
			    return $status;
			}
			public function getStudentReport($student_profile_no)
			{

					$this->db->select('depart_year_code');
					$this->db->select('registration_no');
					$this->db->select('Name');
					$query = $this->db->get_where('student_profile', array('student_profile_no' => $student_profile_no));
				    $resultData =  $query->result_array();
				   	$this->db->select('file_name');
				   	$this->db->select('exam_code'); 
					$query = $this->db->get_where('exam_department_mapping', array('depart_year_code' => $resultData[0]['depart_year_code']));
				    $file_name_array =  $query->result_array();
				    $count = count($file_name_array);
				    $examsData = array_column($file_name_array ,'exam_code');
				    $exams = array();
				    foreach ($examsData as $key => $val) 
				    {
					   	$this->db->select('exams'); 
				    	$query = $this->db->get_where('exam_master', array('exam_code' => $examsData[$key]));
				    	$exams[] = $query->result_array();

				    }
				    $newExams = array();
				    foreach ($exams as $key => $value) {
				    	$newExams[$key] = $exams[$key][0]['exams'];	
				     }
				     $studentName = $resultData[0]['Name'];
				    return array($resultData[0]['registration_no'],$file_name_array,$newExams,$studentName);
			}
			public function getExamDetails($depart_code,$year_code)
			{
				$getExamDetailsSql = "SELECT DISTINCT 
													  em.exam_code,
													  em.exams
									  FROM 
									  				  exam_master em,
									  				  exam_department_mapping edm
									  WHERE 
									  				  edm.depart_year_code
									  IN 
									  					(
									  SELECT 
									  				  depart_year_code
									  FROM 
									  				  department_year_mapping
									  WHERE 
									  				  department_code = ".$depart_code." 
									  AND 
									  				  year_code = ".$year_code."
									  AND 
									  				  em.exam_code = edm.exam_code

									  				  	)";
 				$query = $this->db->query($getExamDetailsSql);
				$examDetails =  $query->result_array();
				return $examDetails;
			}
			public function getExcelFiles($selectedFiles)
			{
				$excelFileNames = array();

				$getExcelFilesSql = "SELECT 
											em.exams,
											em.minimum_pass_mark,
											edm.file_name
											
									FROM 
											exam_master em,
											exam_department_mapping edm
									WHERE
											edm.exam_code = em.exam_code

									AND 
											edm.exam_code = ";

				foreach ($selectedFiles['exam_code'] as $key => $value) {
						$sql = $getExcelFilesSql.$value;
						$query = $this->db->query($sql);
						$excelFileNames[] =  $query->row();
				}
				return $excelFileNames;
			}
			public function fetchStudentReport($groupId)
			{
				$this->db->select('student_profile_no');
				$query = $this->db->get_where('student_profile', array('parent_id' => $groupId));
			    $resultData =  $query->result_array();
				return $resultData;
			}

	}

?>