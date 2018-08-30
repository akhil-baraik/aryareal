<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Join US | Arya Real Estate</title>
<meta name="keywords" content="" >
<meta name="description" content="">
<meta name="author" content="">

<!-- FONTS ONLINE -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!--MAIN STYLE-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body >
<!-- Page Wrap ===========================================-->

  
  <!--======= HEADER =========-->
  <?php
        include 'header.php';

    ?>

  <section class="contact"> 
  
    <div class="contact-form">
      <div class="container"> 
        
      <div class="container"> 
        <?php
				if(isset($_GET['res_id'])){
				if($_REQUEST['res_id']==1)
				{
				?>
				<div class="alert alert-success" role="alert">
                	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                	<strong>Thank You for your interest. We will get back to you soon.</strong> 
                </div>
                 <?php }
				else if($_REQUEST['res_id']==2)
				{
				?>
                 <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sorry, Some error occured. Please try again after sometime </strong> 
                </div>
                 <?php  	
				}
				}
				?>
      </div>
  
        <!--======= TITTLE =========-->
        <div class="tittle"> <img src="images/title.png" alt="">
          <h3>Please fill the form to get started</h3>
          <p>We will get back to you after reviewing </p>
        </div>
        <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank you for your interest in our plan. We will contact you soon</div>
       
        <form role="form" id="contact_form" method="post" action="query/insert_form.php">
          <ul class="row box">
           <h4 class="get_started_title"><strong>Personal Information of the applicant</strong></h4>
           <li class="col-sm-4">
              <label class="font-montserrat">ID
                <input type="text" class="form-control" name="formid" id="formid" placeholder="" readonly="readonly">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Name of the applicant *
                <input type="text" class="form-control" name="applicant_name" id="name"  required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Direct ID
                <input type="text" class="form-control" name="direct_id" id="direct_id"  required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Name as per the bank account*
                <input type="text" class="form-control" name="name_in_bank" id="name_bank_ac" required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Father's / Husband's Name *
                <input type="text" class="form-control" name="f_h_name" id="f_h_name" required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Occupation *
                  <input type="text" class="form-control" name="occupation" id="f_h_name" required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Qualification *</label>
              <select name="qualification" required>
              <option value="Not Selected">-Select-</option>
              	<option value="Matriculation">Matriculation</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Graduate">Graduate</option>
                <option value="Post Graduate">Post Graduate</option>
                <option value="Other">Other</option>
              </select>
                  <!--<input type="text" class="form-control" name="qualification" id="qualification" required="yes" placeholder="">-->
              
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Date of Birth *
                  <input type="date" class="form-control" name="dob" id="f_h_name" required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Email Id
                  <input type="email" class="form-control" name="email_id" id="email_id" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Bank Account No*
                  <input type="text" class="form-control" name="bank_account_no" id="bank_account_no" required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">IFSC Code *
                  <input type="text" class="form-control" name="ifsc" id="ifsc" required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Name & Address of the bank *
                  <input type="text" class="form-control" name="bank_name_address" id="bank_name_address" required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">PAN  *
                  <input type="text" class="form-control" name="pan" id="pan" required="yes" placeholder="">
              </label>
            </li>
            
             <li class="col-sm-4">
              <label class="font-montserrat">Mobile No *
                  <input type="number" class="form-control" name="mobile_no" id="mobile_no" required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Alternate Mobile No *
                  <input type="number" class="form-control" name="alt_mobile_no" id="alt_mobile_no" required="yes" placeholder="">
              </label>
            </li>
            
            <li class="col-sm-4">
              <label class="font-montserrat">Present Residential Address *
                  <textarea type="text" rows="3" class="form-control" name="present_residential_address" id="present_residential_address" required="yes" placeholder=""></textarea>
              </label>
            </li>
             <li class="col-sm-4">
              <label class="font-montserrat">Present & Permanent Address are Same*
                  <input type="checkbox" class="form-control" name="both_address_same" id="both_address_same" placeholder="" style="height:20px;" onClick="populateText()">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Permanent Residential Address*
                  <textarea  type="text" rows="3" class="form-control" name="perm_residential_address" id="perm_residential_address" required="yes" placeholder=""></textarea>
              </label>
            </li>
           
                      
            <!--  declaratrion  -->
          
         	<li class="col-sm-12">
              <h4  class="get_started_title text-center"><strong>APPLICATION CUM ALLOTMENT FORM </strong></h4>
            </li>
       
            <li class="col-sm-10">
              <label class="font-montserrat"><h5><strong>1. DECLARATION BY APPLICANT</strong></h5>
               <ul style="font-weight:bolder; font-size:14px;">
               	<li>i. Hereby declare that the statements made by me in this "ARYA REAL ESTATE" EMPLOYEE' Application cum Allotment Form are true to the best of my knowledge and belief and complete in all respects.</li>
                <li>ii. I understand that any information furnished in the application, if found incorrect or false will render me liable for any penal action or other consequences as may be prescribed in law or otherwie warranted.</li>
                <li>iii. I agree that this "ARYA REAL ESTATE" EMPLOYEE" Application cum Allotment Form and declarations shall be the basis of the contract between me and Arya Real Estate. </li>
                <li>iv. I also declare that any chnages in the information given above after the submission of this would be conveyed to "ARYA REAL ESTATE" EMPLOYEE" immedialtely.</li>
                <li>v. I have read and clearly understood the terms and conditions of this "ARYA REAL ESTATE" EMPLOYEE" Application cum Allotment form printed overleaf and I undertake to be abiding, by and follow them strictly.</li>
               </ul>
              </label>
            </li>
             <li class="col-sm-4">
              <label class="font-montserrat">Date *
                  <input type="date" class="form-control" name="declartion_date" id="declartion_date" required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Place *
                  <input type="text" class="form-control" name="declartion_place" id="declartion_place" placeholder="">
              </label>
            </li>
            <li class="col-sm-4">
              <label class="font-montserrat">Name *
                  <input type="text" class="form-control" name="name_declaration" id="name_applicant" required="yes" placeholder="">
              </label>
            </li>
            
            <li class="col-sm-12">
             <label class="font-montserrat">
                <h5  class=""><strong>2. DECLARATION (BY ROYALTY ACHIEVER AND TECHNICAL ACHIEVER)</strong></h5  
              ></label>
              
            </li>
       
            <li class="col-sm-10">
              
               <ul style="font-weight:bolder; font-size:16px;">
               	<li>i. We hereby declare that the statements furnished in this "ARYA REAL ESTATE' Employee", Application cum Allotment Form" are true to the best of our knowledge and belief and complete in all respects.</li>
                <li>ii. We also declare that we know the applicant and confirm that the applicant is able to enter into any agreement or contract with the company. He is honest, reliable to operate/ manage Company's EXPRESS SHOPPE, if allotted. We also undertake his complete responsibility, both in present and future and without dispute or claim.</li>
                
               </ul>
              </label>
            </li>
             <li class="col-sm-6">
              <label class="font-montserrat">Name of Royal Achiever *
                  <input type="text" class="form-control" name="royal_achiever_name" id="name_of_royal_achiever" required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Direct Seller No *
                  <input type="text" class="form-control" name="royal_achiever_direct_seller_no" id="direct_seller_no" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Name of Technical Achiever *
                  <input type="text" class="form-control" name="technical_achiever_name" id="name_of_technical_achiever" required="yes" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Direct Seller No *
                  <input type="text" class="form-control" name="technical_achiever_direct_seller_no" id="direct_seller_no_technical_achiever" placeholder="">
              </label>
            </li>
           
            <li class="col-sm-8"> 
            	<ul class="row">
                	<li class="col-md-2 no-padding">
                    	<input type="checkbox" class="form-control checkbox-agree" name="agree" id="agree" style="height:20px;">
                    </li>
                    <li class="col-md-6 no-padding">
                    	I agree to the <a href="terms_conditions.php"  class="blue-text" target="_blank">terms and conditions</a>
                    </li>
                 </ul>
		    </li>
            <li class="col-sm-6">
              <button type="submit" value="submit" class="btn font-montserrat" id="btn_submit">Submit</button>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </section>
  
  <!--======= FOOTER =========-->
  <?php include'footer.php'; ?>
</div>

<script src="js/mapmarker.js"></script> 
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script> 
<script>
function populateText()
{
 if(document.getElementById('both_address_same').checked)
 {
  var str=document.getElementById('present_residential_address').value;
  document.getElementById('perm_residential_address').value=str;
}
}
</script>
</body>

</html>