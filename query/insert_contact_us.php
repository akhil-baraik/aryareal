<?php
if (isset($_POST["name"]))
{
ob_start();
include('database_connection.php');

$id=0;
$sqlcommand = "SELECT max(id) as id1 FROM contact_us";
$query_result = mysqli_query($con, $sqlcommand);

if (mysqli_num_rows($query_result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query_result)) {
        $id=$row['id1']+1;
    }
} else {
    echo "Error";
}
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$subject=$_REQUEST["subject"];
$message=$_REQUEST["message"];
$ip_address=get_client_ip();
$sqlcommand1 = "INSERT INTO contact_us (id,name,email,phone,subject,message,date,ip) values ('$id','$name','$email','$phone','$subject','$message',now(),'$ip_address')";

if (mysqli_query($con, $sqlcommand1)) {
	//echo "success";
	header("location:../contact.php?res_id=1");
   			}
	 else
		{
		//echo mysqli_error($con);
		 header("location:../contact.php?res_id=2");
		//echo "Error: " . $sqlcommand1 . "<br>" . mysqli_error($con);
		}
  	
  	
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
mysqli_close($con);
}

else
{
	 header("location:../index.php");
}

?>