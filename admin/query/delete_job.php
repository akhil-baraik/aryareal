<?php

ob_start();
include('database_connection.php');;

$job_id=$_REQUEST["job_id"];


$sqlcommand1 = "DELETE from job_post WHERE job_id='$job_id'";
if (mysqli_query($con, $sqlcommand1)) {
	//echo "Successfully Posted";
	header("location:../recruitment.php?res_id=3&job_id='$job_id'");
   	}
	else
  	{
		//echo "Error occured";
		header("location:../recruitment.php?res_id=2");
	 	 //header("location:write_notice_error.php");
   		 //echo "Error: " . $sqlcommand1 . "<br>" . mysqli_error($con);
	}

mysqli_close($con);


?>