<?php

ob_start();
include('database_connection.php');

$id=0;
$sqlcommand = "SELECT max(id) as id1 FROM job_post";
$query_result = mysqli_query($con, $sqlcommand);

if (mysqli_num_rows($query_result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query_result)) {
        $id=$row['id1']+1;
    }
} else {
    echo "Error";
}
$job_id=trim($_REQUEST["job_id"]);
$post_name=$_REQUEST["post_name"];
$city=$_REQUEST["city"];
$post_date=$_REQUEST["post_date"];
$expire_date=$_REQUEST["expire_date"];

$sqlcommand1 = "INSERT INTO job_post values ('$id','$job_id','$post_name','$city','$post_date','$expire_date',now())";
if (mysqli_query($con, $sqlcommand1)) {
	//echo "Successfully Posted";
	header("location:../add_job_post.php?res_id=1");
   	}
	else
  	{
		//echo "Error occured";
		header("location:../add_job_post.php?res_id=2");
	 	 //header("location:write_notice_error.php");
   		 //echo "Error: " . $sqlcommand1 . "<br>" . mysqli_error($con);
	}

mysqli_close($con);

?>