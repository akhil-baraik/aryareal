<?php
	
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	
	ob_start();
include('database_connection.php');
date_default_timezone_set("Asia/Kolkata");

$c_date=date('F j, Y, g:i a ');

$sqlcommand1 = "UPDATE admin_login SET last_login='$c_date' WHERE id='1'";
mysqli_query($con, $sqlcommand1);
mysqli_close($con);

header("location:../index.php");

?>