<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from premiumlayers.net/demo/html/realtor/12-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jul 2018 06:23:29 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Realtor | Real Estate HTML5 Template</title>
<meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,Realtor | Real Estate HTML5 Templates" >
<meta name="description" content="Realtor | Real Estate HTML5 Template">
<meta name="author" content="M_Adnan">

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
<body>
<!-- Page Wrap ===========================================-->
<div id="wrap"> 
  
 
  
  <!--======= HEADER =========-->
  <?php
        include 'header.php';

    ?>
  
  <!--======= BANNER =========-->
  <!--<div class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h1>404</h1>
        <ol class="breadcrumb">
          <li class="pull-left">404</li>
          <li><a href="#">Home</a></li>
          <li class="active">404</li>
        </ol>
      </div>
    </div>
  </div>-->
  
  <!--======= 404 PAGES =========-->
 
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center"> <span class="not-found font-montserrat"><h2>page not found</h2></span> <span class="head-404 font-montserrat">404</span>
          <h4>Page doesn’t exist or other error occured. Go to our <a href="#." class="font-montserrat">HOMEPAGE</a> or go back to <a href="#." class="font-montserrat">PREVIOUS PAGE</a></h4>
        </div>
        
      </div>
    </div>
  
  
  <!--======= FOOTER =========-->
  <?php include'footer.php'; ?>
</div>

<script src="js/mapmarker.js"></script> 
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script> 
<!-- begin map script--> 
<script type="text/javascript">
// Use below link if you want to get latitude & longitude
// http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude.php 
$(document).ready(function(){
//set up markers 
var myMarkers = {"markers": [{
		
	"latitude": "-37.8176419",
	"longitude":"144.9554397",
	
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
</script>
</body>

<!-- Mirrored from premiumlayers.net/demo/html/realtor/12-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jul 2018 06:23:30 GMT -->
</html>