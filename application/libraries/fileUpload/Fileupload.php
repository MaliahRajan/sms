<?php
if($_POST)
{
	if(isset($_FILES['uploadStudentList'])) //check uploaded file
	{
		$uploadPath	    = filter_var($_POST["uploadPath"], FILTER_SANITIZE_STRING);
		$fileName	    = filter_var($_POST["fileName"], FILTER_SANITIZE_STRING);
		$file_tmp_name 	= $_FILES['uploadStudentList']['tmp_name'];
		copy($file_tmp_name,$uploadPath.$fileName);
	    $output = json_encode(array('status' => 'success'));
        die($output);
    }
}
?>