<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Career | Arya Real Estate</title>
<link rel="shortcut icon" type="image/png" href="favicon.png">
<meta name="keywords" content="" >
<meta name="description" content="">
<meta name="author" content="">

<!-- FONTS ONLINE -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

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
<script>
function myFunction() {
	document.getElementById("career").classList.add('active');
    document.getElementById("contact").classList.remove('active');
    document.getElementById("services").classList.remove('active');
    document.getElementById("about").classList.remove('active');
    document.getElementById("home").classList.remove('active');   
}
</script>
<body onload="myFunction()" >
<!-- Page Wrap ===========================================-->

  
  <!--======= HEADER =========-->
  <?php
        include 'header.php';

    ?>
	

  <section class="contact"> 
  
    <div class="contact-form">
      <div class="container"> 
        <?php
				if(isset($_GET['res_id'])){
				if($_REQUEST['res_id']==1)
				{
				?>
				<div class="alert alert-success" role="alert">
                	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                	<strong>Thank You for your interest in Arya Real Estate . We will get back to you if our requirement matches</strong> 
                </div>
                 <?php }
				else if($_REQUEST['res_id']==2)
				{
				?>
                 <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sorry, Your file with same name alreay exist. Kindly change the file name and try again  </strong> 
                </div>
                 <?php  	
				}
						
				else if($_REQUEST['res_id']==3)
				{
				?>
                <div class="alert alert-danger" role="alert">
                	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sorry, Your file is too large. Kindly upload the file less than 2 MB </strong> 
                </div>
                 <?php  	
				}
				
				else if($_REQUEST['res_id']==4)
				{
				?>
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sorry, Some error occurred. Please try again after sometime</strong> 
                </div>
                <?php  	
				}
				else if($_REQUEST['res_id']==5)
				{
				?>
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sorry, Plaese only upload .doc, .docx or .pdf file</strong> 
                </div>
                <?php  	
				}
				}
				?>
        <!--======= TITTLE =========-->
        <div class="tittle"> <img src="images/title.png" alt="">
          <h3>We are hiring</h3>
		  <div class="row text-center">
            <?php
                    include('database_connection.php');
                    
                    $sql="SELECT * FROM job_post order by current_time_date";
                    $result=mysqli_query($con,$sql);
					
                    //$slno=1;
					$sl_no=1;
                    while($r=mysqli_fetch_array($result))
                    {
                        echo '<div class="col-sm-4 ">';
                            echo '<div class="thumbnail job-post">';
					$sl_no++;
					
					echo "<p><h4><strong>". $r['post_name']. "</strong></h4></p>";
					echo "<p>Posted On:".$r['post_date']. "</p>";
                    echo "<p>Last date to apply:".$r['last_date']."</p>";
                    echo "<p>Location:".$r['city']."</p>";
					
					
					 echo '<a href="apply_job.php?job_id='.$r['job_id'].'" class="btn">Apply Online</a>';
                        echo '</div>';
                      echo '</div>';
                    
					}
					mysqli_close($con);
					?>
         </div>
         	<p><h4>Or you can send resume to us</h4></p>
        
        </div>
        <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
        <form role="form" id="contact_form" method="post" action="query/insert_career.php"  enctype="multipart/form-data">
          <p><h5>Please submit your details</h5></p>
          <ul class="row">
            <li class="col-sm-6">
              <label class="font-montserrat">your name *
                <input type="text" class="form-control" name="name" id="name" placeholder="" required>
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">E-mail Id *
                <input type="email" class="form-control" name="email" id="email" placeholder="" required>
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Phone *
                <input type="number" class="form-control" name="phone" id="phone" placeholder="" required>
              </label>
            </li>
            <li class="col-sm-3">
              <label class="font-montserrat">Resume * (.docx/.pdf)
                <input type="file" class="form-control" name="resume" id="resume" placeholder="" required>
              </label>
            </li>
            <li class="col-sm-3">
             
               <progress id="progressBar" value="0" max="100" style="padding-top:40px; margin:30px; width:220px;"></progress>
            
            </li>
            <li class="col-sm-12">
              <label class="font-montserrat">message
                <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
              </label>
            </li>
            <li class="col-sm-12">
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


</body>
</html>