<?php
if (isset($_REQUEST["email"]))
{
ob_start();
include('database_connection.php');

$id=0;
$sqlcommand = "SELECT max(id) as id1 FROM subscribers";
$query_result = mysqli_query($con, $sqlcommand);

if (mysqli_num_rows($query_result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query_result)) {
        $id=$row['id1']+1;
    }
} else {
    echo "Error";
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

$email=$_REQUEST["email"];
$ip_address=get_client_ip();

$sqlcommand1 = "INSERT INTO subscribers (id,email,date,ip) values ('$id','$email',now(),'$ip_address')";

if (mysqli_query($con, $sqlcommand1)) {
	echo "success";
	header("location:../newsletter_success.php");
   			}
	 else
		{
		echo mysqli_error($con);
		 //header("location:write_notice_error.php");
		//echo "Error: " . $sqlcommand1 . "<br>" . mysqli_error($con);
		}
  	
  	

mysqli_close($con);
}
else
{
	 header("location:../index.php");
}

?>