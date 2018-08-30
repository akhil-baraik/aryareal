<?php

ob_start();
include('database_connection.php');

$new_display_name=trim($_REQUEST["ndisplayname"]);
$password=$_REQUEST["npassword"];

$sqlcommand = "SELECT password from admin_login where id=1";
$query_result = mysqli_query($con, $sqlcommand);
$row = mysqli_fetch_assoc($query_result);
if ( $password==$row['password']) {


$sqlcommand1 = "UPDATE admin_login SET display_name='$new_display_name' WHERE id=1";
if (mysqli_query($con, $sqlcommand1)) {
	//echo "Successfully Posted";
	header("location:../settings.php?res_id=name_success");
   	}
	else
  	{
		//echo "Error occured";
		header("location:../settings.php?res_id=name_failed");
	 	 //header("location:write_notice_error.php");
   		 //echo "Error: " . $sqlcommand1 . "<br>" . mysqli_error($con);
	}
}
else
{
	header("location:../settings.php?res_id=wrong_password");
}
mysqli_close($con);
?>