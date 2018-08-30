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
    <title>View Joining Request | Arya Real EState</title>
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
                    <div class="col s12 l4 m12 " style="margin-top:24px;">
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
                  <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav">Administrator<i class="mdi-navigation-arrow-drop-down right"></i></a>
                 
                </div>
              </div>
            </li>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
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
                
                <li class="bold active ">
                  <a href="joining_request.php" class="waves-effect waves-cyan">
                      <i class="material-icons">device_hub</i>
                      <span class="nav-text">Joining Requests</span>
                    </a>
                </li>
               	<li class="bold ">
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
 
            <!--card widgets start-->
            <div id="card-widgets">
             
                <!--Hoverable Table-->
            <div class="divider"></div>
            	<div id="hoverable-table">
                
            	<div class="col s12 card" >
                    <div class="row">
                    	<?php
							include('database_connection.php');                    
							$id=$_REQUEST['id'];
							if($_REQUEST['page']==null)
							{
								$page=1;
							}
							else
							{
								$page=$_REQUEST['page'];
							}
							$sql="SELECT * FROM forms where id='$id'";
							$result=mysqli_query($con,$sql);
							$r=mysqli_fetch_assoc($result);
						?>
                    	<div class="col s2 center" >
                            <div class="center padding-5 left"> <a  href="joining_request.php?page=<?php echo $page; ?>"class="btn waves-effect  yellow darken-3 btn-floating"><i class="material-icons">arrow_back</i></a></div>
                        </div>
                        <div class="col s8 center" >
                             <h5 class="blue-grey-text ">Joining Form</h5>
                        </div>
                        <div class="col s2 center" >
                        
                             <div class="center grey-text padding-10"><?php echo $r['applicant_name']; ?></div>
                              <span class="center grey-text padding-10"><?php $pieces = explode("-", $r['declaration_date']);
							   echo $pieces[2].'-'.$pieces[1].'-'.$pieces[0];
							   ?></span>                  
                        </div>
                    </div>
           		</div>
              
              <div class="row">
                <div class="col s12  z-index-2">
                  <div class="row">
                          <div class="row">
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Id</label>
                                  <input id="username" type="text" name="username" class="validate" value="<?php echo $r['id'];?>" required >
                            </div>
                           
                           
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Applicant Name</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['applicant_name'];?>" required >
                            </div>
                           
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Direct Id</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['direct_id'];?>" required >
                            </div>
                           </div>
                           <div class="row">
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Name in Bank</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['name_in_banks'];?>" required >
                            </div>
                        
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Father/Husband Name</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['father_husband_name'];?>" required >
                            </div>
                          
                             <div class="input-field col s12 m6 l4">
                                  <input id="pasword" type="text" name="password" class="validate"  value="<?php echo $r['occupation'];?>" required>
                                  <label for="password">Occupation</label>
                            </div>
                          </div>  
                          
                          <div class="row">
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">DOB</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['dob'];?>" required >
                            </div>
                        
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Email Id</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['email_id'];?>" required >
                            </div>
                          
                             <div class="input-field col s12 m6 l4">
                                  <input id="pasword" type="text" name="password" class="validate"  value="<?php echo $r['bank_account_no'];?>" required>
                                  <label for="password">Bank A/C No</label>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">IFSC</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['bank_ifsc'];?>" required >
                            </div>
                        
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Bank Name & Address</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['bank_name_address'];?>" required >
                            </div>
                          
                             <div class="input-field col s12 m6 l4">
                                  
                                  <input id="pasword" type="text" name="password" class="validate"  value="<?php echo $r['pan'];?>" required>
                                  <label for="password">PAN</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Present Address</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['present_address'];?>" required >
                            </div>
                        
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Permanent Address</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['permanent_address'];?>" required >
                            </div>
                          
                             <div class="input-field col col s12 m6 l4">
                                  <input id="pasword" type="text" name="password" class="validate"  value="<?php echo $r['mobile_no'];?>" required>
                                  <label for="password">Mobile No</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Aletrnate Mobile No</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['alt_mobile_no'];?>" required >
                            </div>
                        
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Declaration Date</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['declaration_date'];?>" required >
                            </div>
                          
                             <div class="input-field col s12 m6 l4">
                                  <input id="pasword" type="text" name="password" class="validate"  value="<?php echo $r['declaration_place'];?>" required>
                                  <label for="password">Declaration Place</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Declaration Name</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['declaration_date'];?>" required >
                            </div>
                        
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Royal Achiever Name</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['royal_achiever_name'];?>" required >
                            </div>
                          
                             <div class="input-field col s12 m6 l4">
                                  <input id="pasword" type="text" name="password" class="validate"  value="<?php echo $r['royal_achiever_direct_seller_no'];?>" required>
                                  <label for="password">Direct Seller No</label>
                            </div>
                          </div>
                           <div class="row">
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Technical Achiever Name</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['technical_achiever_name'];?>" required >
                            </div>
                        
                            <div class="input-field col s12 m6 l4">
                                  <label for="username">Direct Seller No</label>
                                  <input id="username" type="text" name="username" class="validate"  value="<?php echo $r['technical_achiever_direct_seller_no']; mysqli_close($con);?>" required >
                            </div>
                          </div>
                         	<div class="row">
                             <div class="input-field col s12 m4 l3">
                             
                                  <button type="submit" class="btn waves-effect waves-light blue" ><i class="material-icons right">print</i>Print
                                    
                                  </button>
                            </div>
                            <div class="input-field col  s12 m4 s3">
                                  <a href="joining_request.php" class="btn waves-effect waves-light yellow darken-3 modal-trigger" type="button" data-target="modal1"  >back <i class="material-icons left">arrow_back</i>
                                    
                                  </a>
                            </div>
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
		$('#search_field').on('keyup', function() {
  var value = $(this).val();
  var patt = new RegExp(value, "i");

  $('#myTable').find('tr').each(function() {
    if (!($(this).find('td').text().search(patt) >= 0)) {
      $(this).not('.myHead').hide();
    }
    if (($(this).find('td').text().search(patt) >= 0)) {
      $(this).show();
    }

  });

 
});
	</script>
	     <script>
		$(document).ready(function(){
    $('.modal').modal();
	
  });
	</script>
  </body>
</html>