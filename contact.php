<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us | Arya Real Estate</title>
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
<script>
function myFunction() {
    document.getElementById("contact").classList.add('active');
    document.getElementById("services").classList.remove('active');
    document.getElementById("about").classList.remove('active');
    document.getElementById("home").classList.remove('active');  
	document.getElementById("career").classList.remove('active'); 
}
</script>
<body onload="myFunction()" >
<!-- Page Wrap ===========================================-->
 
  
  <!--======= HEADER =========-->
  <?php
        include 'header.php';

    ?>
  
  <!--======= BANNER =========-->
  <div class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h1>CONTACT US</h1>
        <ol class="breadcrumb">
          <li class="pull-left">CONTACT US</li>
          <li><a href="#">Home</a></li>
          <li class="active">CONTACT US</li>
        </ol>
      </div>
    </div>
  </div>
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
                	<strong>Thank You for contacting us. We will get back to you soon.</strong> 
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
    </div>
   </section> 
    
  <!--======= MAP =========-->
  <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.8421690546415!2d85.32180431497399!3d23.35773198478435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e048a26d25db%3A0xc7442c2940333ff!2sWebdadz+Technology+-+Web+Design+Ranchi!5e0!3m2!1sen!2sin!4v1531150356207" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <!--======= CONTACT =========-->
  <section class="contact"> 
    
    <!--======= CONTACT INFORMATION =========-->
    <div class="contact-info">
      <div class="container"> 
        <!--======= CONTACT =========-->
        <ul class="row con-det">
          
          <!--======= ADDRESS =========-->
          <li class="col-md-4"> <i class="fa fa-map-marker"></i>
            <p>Shakespeare Sarani, Jasmine Tower, Kolkata - 700017, West Bengal, INDIA</p>
            <a href="https://www.google.com/maps/place/Webdadz+Technology+-+Web+Design+Ranchi/@23.357732,85.3218043,17z/data=!3m1!4b1!4m5!3m4!1s0x39f4e048a26d25db:0xc7442c2940333ff!8m2!3d23.357732!4d85.323993" target="_blank" class="font-montserrat">Show map </a> </li>
          
          <!--======= EMAIL =========-->
          <li class="col-md-4"> <i class="fa fa-phone"></i>
            <p>Tel  :  +91 7667757440</p>
            <p>Tel  :  +91 7870497532</p>
          </li>
          
          <!--======= ADDRESS =========-->
          <li class="col-md-4"> <i class="fa fa-clock-o"></i>
            <p>Week days  :     9:00 Am to 5:00 PM</p>
            <p>Saturday   :     9:00 Am to 12:00 PM</p>
            <p>Sunday     :     Holiday</p>
          </li>
        </ul>
        
        <!--======= CONTACT FORM =========--> 
        
      </div>
    </div>
    <div class="contact-form">
      <div class="container"> 
        
        <!--======= TITTLE =========-->
        <div class="tittle"> <img src="images/title.png" alt="">
          <h3>feel free to communicate with us</h3>
          <p>Please feel free to contact me if you need any further information.</p>
        </div>
        <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
        <form role="form" id="contact_form" method="post" onSubmit="return false">
          <ul class="row">
            <li class="col-sm-6">
              <label class="font-montserrat">your name *
                <input type="text" class="form-control" name="name" id="name" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">your e-mail *
                <input type="text" class="form-control" name="email" id="email" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Phone *
                <input type="text" class="form-control" name="company" id="company" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Subject
                <input type="text" class="form-control" name="website" id="website" placeholder="">
              </label>
            </li>
            <li class="col-sm-12">
              <label class="font-montserrat">message
                <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
              </label>
            </li>
            <li class="col-sm-12">
              <button type="submit" value="submit" class="btn font-montserrat" id="btn_submit" onClick="proceed();">Send message</button>
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
<!-- begin map script--> 
<!--
<script type="text/javascript">
// Use below link if you want to get latitude & longitude
// http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude.php 
$(document).ready(function(){
//set up markers 
var myMarkers = {"markers": [{
		
	"latitude": "23.357732",
	"longitude":"85.3218043",
	
	"icon": "images/map-locator.png", 
	"baloon_text": '121 King St, Melbourne VIC 3000, Australia'
}]};
	
//set up map options
$("#map").mapmarker({
  zoom  : 17,
  center  : '121 King Street Melbourne Victoria 3000 Australia',
  markers : myMarkers
  });
});
</script> -->
</body>

</html>