<?php

ob_start();
include('database_connection.php');

$job_id=trim($_REQUEST["job_id"]);
$post_name=$_REQUEST["post_name"];
$city=$_REQUEST["city"];
$page=$_REQUEST["page_no"];
$post_date=$_REQUEST["post_date"];
$expire_date=$_REQUEST["expire_date"];

$sqlcommand1 = "UPDATE job_post SET post_name='$post_name', city='$city', post_date='$post_date', last_date='$expire_date',current_time_date=now() WHERE job_id='$job_id'";
if (mysqli_query($con, $sqlcommand1)) {
	//echo "Successfully Posted";
	header("location:../recruitment.php?res_id=1&page=$page");
   	}
	else
  	{
		//echo "Error occured";
		header("location:../recruitment.php?res_id=$page");
	 	 //header("location:write_notice_error.php");
   		 //echo "Error: " . $sqlcommand1 . "<br>" . mysqli_error($con);
	}

mysqli_close($con);


?>