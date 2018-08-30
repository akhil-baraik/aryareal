<?php

ob_start();
include('database_connection.php');
 $username=$_POST["username"];
 $password=$_POST["password"];

$sqlcommand = "SELECT * from admin_login where id=1";
$query_result = mysqli_query($con, $sqlcommand);
$row = mysqli_fetch_assoc($query_result);
if ($username==$row['username'] && $password==$row['password']) {
	session_start();
      $_SESSION["username"]=$username;
		 //on session creation
		$_SESSION['timestamp']=time();
    header("location:../dashboard.php");
		
    }
 else {
     header("location:../login_error.php");
}
		
 
//Attempt insert query execution
ob_end_clean();
mysqli_close($con);
?>
