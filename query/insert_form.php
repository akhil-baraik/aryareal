<?php
if (isset($_POST["applicant_name"]))
{
	ob_start();
	include('database_connection.php');
	
	$id=0;
	$sqlcommand = "SELECT max(id) as id1 FROM forms";
	$query_result = mysqli_query($con, $sqlcommand);
	
	if (mysqli_num_rows($query_result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($query_result)) {
			$id=$row['id1']+1;
		}
	} else {
		echo "Error";
	}
	$applicant_name=$_REQUEST["applicant_name"];
	$formid=$_REQUEST["formid"];
	$direct_id=$_REQUEST["direct_id"];
	$name_in_bank=$_REQUEST["name_in_bank"];
	$f_h_name = $_REQUEST["f_h_name"];
	$occupation=$_REQUEST["occupation"];
	$qualification=$_REQUEST["qualification"];
	$dob=$_REQUEST["dob"];
	$email_id=$_REQUEST["email_id"];
	$bank_account_no=$_REQUEST["bank_account_no"];
	$ifsc = $_REQUEST["ifsc"];
	$bank_name_address=$_REQUEST["bank_name_address"];
	$pan=$_REQUEST["pan"];
	$present_residential_address=$_REQUEST["present_residential_address"];
	$perm_residential_address=$_REQUEST["perm_residential_address"];
	$mobile_no = $_REQUEST["mobile_no"];
	$alt_mobile_no=$_REQUEST["alt_mobile_no"];
	$declartion_date=$_REQUEST["declartion_date"];
	$declartion_place=$_REQUEST["declartion_place"];
	$name_declaration=$_REQUEST["name_declaration"];
	$royal_achiever_name=$_REQUEST["royal_achiever_name"];
	$royal_achiever_direct_seller_no = $_REQUEST["royal_achiever_direct_seller_no"];
	$technical_achiever_name=$_REQUEST["technical_achiever_name"];
	$technical_achiever_direct_seller_no=$_REQUEST["technical_achiever_direct_seller_no"];

	$sqlquery = "INSERT INTO forms values ('$id','$applicant_name','$formid',$direct_id','$name_in_bank','$f_h_name','$occupation','$dob','$email_id','$bank_account_no','$ifsc','$bank_name_address','$pan','$occupation','$present_residential_address','$perm_residential_address','$mobile_no','$declartion_date','$declartion_place','$name_declaration','$royal_achiever_name','$royal_achiever_direct_seller_no','$technical_achiever_name','$technical_achiever_direct_seller_no')";
		
	if (mysqli_query($con, $sqlquery)) {
		//echo "success";
		header("location:../get_started_form.php?res_id=1");
	   
		}
	else
		{
			header("location:../get_started_form.php?res_id=2");
			//header("location:write_notice_error.php");
			//echo "Error: " . $sqlquery . "<br>" . mysqli_error($con);
		}
	
	mysqli_close($con);
}
else
{
	 header("location:../index.php");
}

?>