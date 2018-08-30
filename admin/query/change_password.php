<?php
ob_start();

include('database_connection.php');

 $username=$_POST["username"];
 $current_password=$_POST["cpassword"];
 $new_password=$_POST["npassword"];
 $confirm_password=$_POST["confirm_password"];
 
 $sqlcommand="SELECT * from admin_login where id=1";
 $result=mysqli_query($conn,$sqlcommand);
 $row=mysqli_fetch_assoc($result);
 if($username==$row['username'] && $current_password==$row['password'])
 {
	$sqlcommand1 = "UPDATE admin_login set password='$new_password' where id=1";
	if(mysqli_query($conn, $sqlcommand1))
	{
	header("location:../settings.php?res_id=password_changed");
	}
	else
  	{
		
		header("location:../settings.php?res_id=name_failed");
	}
 }
else{
	
	header("location:../settings.php?res_id=wrong_username_password");;
	
 }
$con = null;
mysqli_close($con);
?>
