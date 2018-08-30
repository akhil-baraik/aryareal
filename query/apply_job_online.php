<?php
if (isset($_POST["name"]))
{
ob_start();
include('database_connection.php');

$id=0;
$sqlcommand = "SELECT max(id) as id1 FROM careers";
$query_result = mysqli_query($con, $sqlcommand);

if (mysqli_num_rows($query_result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query_result)) {
        $id=$row['id1']+1;
    }
} else {
    echo "Error";
}
$job_id=$_REQUEST["job_id"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$target_dir = "resume/";
$target_file = $target_dir . basename($_FILES["resume"]["name"]);
$message=$_REQUEST["message"];

$mimeTypes = array('application/doc','application/docx', 'application/pdf', 'another/type');

    if ( !in_array($_FILES["resume"]["type"], $mimeTypes))
    {
        header("location:../career.php?res_id=5");
    }
    else
    {
       
    

if (file_exists($target_file))
	 {
		 //echo $target_file;
		header("location:../career.php?res_id=2");
		//echo "Sorry, file already exists.";
	   // $uploadOk = 0;
   
	}
else if ($_FILES["resume"]["size"] > 2051000)
	 {
		header("location:../career.php?res_id=3");
	
		  // echo "Sorry, your file is too large.";
		//$uploadOk = 0;
	}
	else
	{
		 if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) 
	  	{

			$sqlcommand1 = "INSERT INTO careers (id, job_id, name, email, phone, resume,message,date,status) values ('$id','$job_id','$name','$email','$phone','$target_file','$message',now(),'Unattended')";
	
			if (mysqli_query($con, $sqlcommand1)) {
				//echo "success";
				header("location:../career.php?res_id=1");
   
			}
		 	else
  			{
				header("location:../career.php?res_id=4");
	 			 //header("location:write_notice_error.php");
   				 //echo "Error: " . $sqlcommand1 . "<br>" . mysqli_error($con);
			}

    	}
	 	else
		 {
       		header("location:../error.php?res_id=4");
    	 }
}
	}
mysqli_close($con);
}
else
{
	 header("location:../index.php");
}

?>