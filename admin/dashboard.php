<?php

        session_start();
        
        if($_SESSION["username"]==null)
        {
        	header("Location: index.php");
        }

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title> Dashboard | Arya Real EState</title>
    <!-- Favicons-->
    <link rel="icon" href="images/logo/favicon.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/logo/favicon.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="css//materialize.css" type="text/css" rel="stylesheet">
    <link href="css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
   
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
           
              <div class="row">
                
                    <div class="col s12 m6 l4">
                                         
                         <a href="dashboard.php" class="brand-logo hide-on-med-and-down "><img src="images/logo/arya-foundation-logo.png" alt="materialize logo" >
                         </a>
                    </div>
                    <div class="col s12 l4 m12 " style="margin-top:12px;">
                        <span class="logo-text center "><h5>Arya Foundation</h5></span>
                    </div>
                    
                    <div class="col s12 l4 m12  hide-on-med-and-down ">
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button right" data-activates="profile-dropdown">
                            <span class="avatar-status avatar-online"><img src="images/avatar/avatar-10.png" alt="avatar"> </span>
                        </a>
                    </div> 
                
              </div>
               
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
             <!-- <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Profile</a>
              </li>-->
              <li>
                <a href="settings.php" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Settings</a>
              </li>
             <!-- <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Lock</a>
              </li>-->
              <li>
                <a href="#modallogout" class="grey-text text-darken-1 modal-trigger">
                  <i class="material-icons">exit_to_app</i> Logout</a>
              </li>
              <li class="divider"></li>
                   <li>
                     <a class="grey-text text-darken-1  modal-trigger" href="#modal12" >
                     <i class="material-icons">live_help</i>Help</a>
                   </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- end header nav-->
    </header>
    <!-- END HEADER -->
    
    <!-- Modal Structure -->
     <div id="modallogout" class="modal">
         <div class="modal-content">
     	    <h4>Logout?</h4>
         </div>
        <div class="modal-footer">
        	<a href="query/logout.php" class=" waves-effect waves-green btn-flat">Yes</a>
        	<a href="#" class="modal-close waves-effect waves-green btn-flat">No</a>
        </div>
     </div>
     <!-- modal -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
              <div class="row">
                <div class="col col s4 m4 l4">
                  <img src="images/avatar/avatar-10.png" alt="" class="circle responsive-img valign profile-image cyan">
                </div>
                <div class="col col s8 m8 l8">
                 <ul id="profile-dropdown-nav" class="dropdown-content">
                   <!-- <li>
                      <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">face</i> Profile</a>
                    </li>-->
                    <li>
                      <a href="settings.php" class="grey-text text-darken-1">
                        <i class="material-icons">settings</i> Settings</a>
                    </li>
                    <!--<li>
                      <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">live_help</i> Help</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">lock_outline</i> Lock</a>
                    </li>-->
                    <li>
                      <a href="#modallogout" class="grey-text text-darken-1 modal-trigger">
                        <i class="material-icons">exit_to_app</i> Logout</a>
                    </li>
                    <li class="divider"></li>
                   <li>
                     <a class="grey-text text-darken-1  modal-trigger" href="#modal12" >
                     <i class="material-icons">live_help</i>Help</a>
                   </li>
                  </ul>
                   <?php
						include('database_connection.php');
								
						$sql="SELECT display_name FROM admin_login";
						$result=mysqli_query($con,$sql);
						$r=mysqli_fetch_assoc($result);
					?>
                  <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav"><?php echo $r['display_name'];?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                                  
                </div>
              </div>
            </li>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold active">
                  <a href="dashboard.php" class="waves-effect waves-cyan">
                      <i class="material-icons">dashboard</i>
                      <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="bold ">
                  <a href="visitors.php" class="waves-effect waves-cyan">
                      <i class="material-icons">person</i>
                      <span class="nav-text">Visitors</span>
                    </a>
                </li>
                
                <li class="bold ">
                  <a href="joining_request.php" class="waves-effect waves-cyan">
                      <i class="material-icons">device_hub</i>
                      <span class="nav-text">Joining Requests</span>
                    </a>
                </li>
               	<li class="bold">
                  <a href="job_applications.php" class="waves-effect waves-cyan">
                      <i class="material-icons">work</i>
                      <span class="nav-text">Job Applications</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="recruitment.php" class="waves-effect waves-cyan">
                      <i class="material-icons">publish</i>
                      <span class="nav-text">Job Post</span>
                    </a>
                </li>
                 <li class="bold">
                  <a href="newsletter_subscribers.php" class="waves-effect waves-cyan">
                      <i class="material-icons">subscriptions</i>
                      <span class="nav-text">Newsletter Subscribers</span>
                    </a>
                </li>
               
               <!-- <li class="bold">
                  <a href="table-basic.html" class="waves-effect waves-cyan">
                      <i class="material-icons">border_all</i>
                      <span class="nav-text">Table</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="ui-icons.html" class="waves-effect waves-cyan">
                    <i class="material-icons">lightbulb_outline</i>
                    <span class="nav-text">Icons</span>
                  </a>
                </li>-->
               
              </ul>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>
        <!-- Modal Structure -->
                          <div id="modal12" class="modal bottom-sheet">
                            <div class="modal-content">
                              <h4><i class=" medium material-icons blue-text left">help</i>Webdadz Technology</h4>
                                                           
                              <div class="row center">
                              	<div class="col s3 offset-s4">
                                	
                                  <p><h5><i class="material-icons orange-text left">mail</i>support@webdadz.com</h5></p>
                                  <p><h5><i class="material-icons orange-text left">phone</i> +91 9546749205</h5> </p>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <a href="#" class="modal-close waves-effect waves-green btn-flat">Dismiss</a>
                            </div>
                          </div>
                          <!-- Modal Structure -->
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        		<?php
                   
                    
                    $sql1="SELECT count(id) as num_v FROM contact_us ";
                    $result1=mysqli_query($con,$sql1);
					$r1=mysqli_fetch_assoc($result1);
					
					$sqlvun="SELECT count(id) as num_vun FROM contact_us where status='Unattended' ";
                    $resultvun=mysqli_query($con,$sqlvun);
					$rvun=mysqli_fetch_assoc($resultvun);
					
				
					
					$sql2="SELECT count(id) as num_j FROM careers ";
                    $result2=mysqli_query($con,$sql2);
					$r2=mysqli_fetch_assoc($result2);
					
					
					$sqljun="SELECT count(id) as num_jun FROM careers where status='Unattended' ";
                    $resultjun=mysqli_query($con,$sqljun);
					$rjun=mysqli_fetch_assoc($resultjun);
					
					$sql3="SELECT count(id) as num_f FROM forms ";
                    $result3=mysqli_query($con,$sql3);
					$r3=mysqli_fetch_assoc($result3);
					
					$sqlfun="SELECT count(id) as num_fun FROM forms where status='Unattended' ";
                    $resultfun=mysqli_query($con,$sqlfun);
					$rfun=mysqli_fetch_assoc($resultfun);
				?>
        <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div id="card-stats">
              <div class="row mt-1">
                <a href="visitors.php"><div class="col s12 m6 l3 waves-effect">
                  <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">perm_identity</i>
                        <p  id="asd">Visitors</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <p><h5 class="mb-0 right-align mt-7"><?php echo $r1['num_v'];?></h5></p>
                        <p ><button class="btn pulse white grey-text btn-floating" id="visitor_notification"><?php echo $rvun['num_vun'];?></button></p>
                      </div>
                    </div>
                  </div>
                </div></a>
                <?php
                	if($rvun['num_vun']==0)
					{
					     echo '<script type="text/javascript">
                               var t=document.getElementById("visitor_notification");
                               t.style.display="none";
                               
                             </script>';
                             
					}
					?>
                <a href="job_applications.php"><div class="col s12 m6 l3 waves-effect">
                  <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons  background-round mt-5">mail</i>
                        <p>Job Application</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <p><h5 class="mb-0"><?php echo $r2['num_j']; ?></h5></p>
                        <p ><button class="btn pulse white grey-text btn-floating" id="job_notification"><?php echo $rjun['num_jun'];?></button></p>
                      </div>
                    </div>
                  </div>
                </div></a>
                <?php
                	if($rjun['num_jun']==0)
					{
					   echo '<script type="text/javascript">
                               var t=document.getElementById("job_notification");
                               t.style.display="none";
                             </script>';
                             
					}
					?>
                <a href="joining_request.php"><div class="col s12 m6 l3 waves-effect">
                  <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">device_hub</i>
                        <p>Joining Request</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <p><h5 class="mb-0"><?php echo $r3['num_f']; ?></h5></p>
                        <p ><button class="btn pulse white grey-text btn-floating" id="join_notification"><?php echo $rfun['num_fun'];?></button></p>
                      </div>
                    </div>
                  </div>
                </div></a>
                 <?php
                	if($rfun['num_fun']==0)
					{
					   echo '<script type="text/javascript">
                               var t=document.getElementById("join_notification");
                               t.style.display="none";
                             </script>';
					}
					
					?>
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">date_range</i>
                        <p>Today</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h6 class="mb-0"><?php echo date("l");?></h6>
                        <p class="no-margin"><?php echo date(' jS  F Y'); ?></p>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            
            <!--card widgets start-->
            <div id="card-widgets">
              <div class="row">
                
                <div class="col s12 m4 l6">
                  <div id="profile-card" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="images/gallary/3.png" alt="user bg">
                    </div>
                    <div class="card-content">
                   
                      <img src="images/icon/briefcase.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                      <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons">edit</i>
                      </a>
                      <span class="card-title activator grey-text text-darken-4">Contact </span>
                   		<?php 
							 include('database_connection.php');
							
							$sql="SELECT last_login as num FROM admin_login ";
							$result=mysqli_query($con,$sql);
							$r=mysqli_fetch_assoc($result);
						 ?> 
                        <p>
                        <i class="material-icons ">cake</i> Last Login: <?php echo $r['num']; mysqli_close($con);?>
                      </p>
                         <p>
                        <i class="material-icons">perm_phone_msg</i>+91 6200314890</p>
                      <p>
                        <i class="material-icons">perm_phone_msg</i>+91 6206095383</p>
                      <p>
                        <i class="material-icons">email</i> info@aryarealestate.com</p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4"> Arya Foundation
                        <i class="material-icons right">close</i>
                      </span>
                      <p>SHAKESPEARE SARANI, JASMINE TOWER, KOLKATA - 700017, WEST BENGAL, INDIA</p>
                      <p>
                      	<div class="row">
                        	<div class="col s6 m6 l6">
                            	 <i class="material-icons ">perm_phone_msg</i><input type="text" value="+91 6200314890">
                            </div>
                            <div class="col s6 m6 l6 ">
                            	<button type="button" data-target="modalphone1" class="btn waves-effect waves-light yellow darken-3 right modal-trigger"><i class="material-icons">edit</i></button>
                            </div>
                        </div>
                       </p>
                      <p>
                      <div class="row">
                        	<div class="col s6 m6 l6">
                            	 <i class="material-icons ">perm_phone_msg</i><input type="text" value="+91 6200314890">
                            </div>
                            <div class="col s6 m6 l6 ">
                            	<button type="button" data-target="modalphone2" class="btn waves-effect waves-light yellow darken-3 right modal-trigger"><i class="material-icons">edit</i></button>
                            </div>
                        </div>
                       </p>
                      <p>
                      	<div class="row">
                        	<div class="col s6 m6 l6">
                            	  <i class="material-icons">email</i><input type="text" value=" info@aryarealestate.com">
                            </div>
                            <div class="col s6 m6 l6 ">
                            	<button type="button" data-target="modalemail" class="btn waves-effect waves-light yellow darken-3 right modal-trigger"><i class="material-icons">edit</i></button>
                            </div>
                        </div>
                      
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--card widgets end-->
            
           
            <!-- //////////////////////////////////////////////////////////////////////////// -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
       
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
     
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
    <footer class="page-footer gradient-45deg-light-blue-cyan">
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-2" href="#" target="_blank">Arya Foundation</a> All rights reserved.</span>
            <span class="right hide-on-small-only">Developed by <a class="grey-text text-lighten-2" href="https://webdadz.com/">Webdadz Technology</a></span>
          </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script>
		$(document).ready(function(){
        $('.modal').modal();
	
        });
  
      
	</script>
  </body>
</html>