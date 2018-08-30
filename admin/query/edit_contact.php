<?php
ob_start();
include('database_connection.php');
//Phone update

echo 'asdasdbhasfhagfasfaskfaskfsafgaskfgksa'.$_REQUEST["executeid"];
if($_REQUEST["executeid"]==1)
{
	$phone=$_REQUEST["phone"];
	$query= "UPDATE company_contact set phone_no='$phone' where id=1";
	if (mysqli_query($con, $query)) {
			header("location:../edit_contact.php?res_id=1");
   		}
}
//Address update
if($_REQUEST["executeid"]==2)
{
	$address=$_REQUEST["address"];
	$query= "UPDATE company_contact set address='$address' where id=1";
	if (mysqli_query($con, $query)) {
			header("location:../edit_contact.php?res_id=2");
   		}
}
//email id update
if($_REQUEST["executeid"]==3)
{
	$email=$_REQUEST["email"];
	$query= "UPDATE company_contact set email_id='$email' where id=1";
	if (mysqli_query($con, $query)) {
			header("location:../edit_contact.php?res_id=3");
   		}
}
mysqli_close($con);
?>