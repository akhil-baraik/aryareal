<?php
ob_start();
include('database_connection.php');;
//status update

$id=$_REQUEST["idforquery"];
$status=$_REQUEST["status"];
$pagename=$_REQUEST["pagename"];
//echo $status.'fadad'.$id;
if($pagename=="visitors.php"){
	$table_name="contact_us";
}
if($pagename=="job_applications.php"){
	$table_name="careers";
}
if($pagename=="joining_request.php"){
	$table_name="forms";
}
if($status=="Attended")
{
$query= "UPDATE $table_name set status='Attended' where id='$id'";
if (mysqli_query($con, $query)) {
	//header("location:../edit_contact.php?res_id=1");
	echo 'At';
}
}

else
{
	$query= "UPDATE $table_name set status='Unattended' where id='$id'";
	if (mysqli_query($con, $query)) {
		echo 'Un';
}
}

mysqli_close($con);
?>