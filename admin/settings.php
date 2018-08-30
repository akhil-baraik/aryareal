<?php
session_start();

if($_SESSION["username"]==null)
{
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
      <title>Settings | Arya Real EState</title>
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
  
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="index.html" class="brand-logo darken-1">
                    <img src="images/logo/arya-foundation-logo.png" alt="materialize logo">
                    
                    <span class="logo-text hide-on-med-and-down" style="padding-top:40px;">Arya Foundation</span>
                  </a>
                 
                </h1>
              </li>
             
            </ul>
             
            
            <ul class="right hide-on-med-and-down">
             
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="images/avatar/avatar-10.png" alt="avatar">
                    
                  </span>
                </a>
              </li>
             
            </ul>
           
            
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
						$con=mysqli_connect("localhost","root","") or die ("can not connect");
						mysqli_select_db($con,"aryareal_maindb") or die ("database not found");
								
						$sql="SELECT display_name FROM admin_login";
						$result=mysqli_query($con,$sql);
						$r=mysqli_fetch_assoc($result);
					?>
                  <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn " href="#" data-activates="profile-dropdown-nav"><?php echo $r['display_name']; mysqli_close($con); ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                 
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
                
                <li class="bold ">
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
             	<div class="row">
                	<div class="col s12 ">
                    	 <h5 class="blue-grey-text center"><i class="material-icons">settings</i>Settings</h5>
                      
                    </div>
                  	<?php
						if(isset($_GET['res_id']))
						{
							if($_REQUEST['res_id']=="name_success"){
							
								echo '<div id="disappear" class="col s12 grey gradient-45deg-cyan-light-green center black-text"><h4>Display name changed successfully</h4></div>';
							}
							
							if($_REQUEST['res_id']=="name_failed"){
							
								echo '<div id="disappear" class="col s12 grey gradient-45deg-cyan-light-green center black-text"><h4>Error. Try again after sometime</h4></div>';
							}
							
							if($_REQUEST['res_id']=="wrong_password"){
							
								echo '<div id="disappear" class="col s12 grey gradient-45deg-cyan-light-green center black-text"><h4>You entered a wrong password</h4></div>';
							}
							if($_REQUEST['res_id']=="wrong_username_password"){
							
								echo '<div id="disappear" class="col s12 grey gradient-45deg-cyan-light-green center black-text"><h4>You entered wrong username/password</h4></div>';
							}
							if($_REQUEST['res_id']=="password_changed"){
							
								echo '<div id="disappear" class="col s12 grey gradient-45deg-cyan-light-green center black-text"><h4>Password changed successfully</h4></div>';
							}
						}
						
					?>
                 
                    <div class="col s12" id="change_password_section">
                      <ul class="tabs">
                        <li class="tab col s3"><a href="#test1" id="cpass" class="active">Change Password</a></li>
                        <li class="tab col s3"><a  href="#test2" id="cdname" class="">Change Display Name</a></li>
                       
                      </ul>
                    </div>
                      
                    <div id="test1" class="col s12">
                       <div class="row ">
                        
                        <div class="col offset-l2 offset-m2 s12 m8 l6 ">
                          <div id="profile-card" class="card">
                            
                            <div class="card-content">
                           
                              <span class="card-title activator grey-text text-darken-4">Change Password </span>
                              
                              <div class="row">
                                <form action="query/change_password.php" method="post" >
                                  <div class="row">
                                    <div class="input-field col s12">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input id="username" type="text" name="username" class="validate" required>
                                          <label for="username">Username</label>
                                    </div>
                                   </div>
                                    <div class="row">
                                     	<div class="input-field col s12">
                                          <i class="material-icons prefix ">lock</i>
                                          <input id="cpassword" type="password" name="cpassword" class="validate" required>
                                          
                                          <label for="cpassword">Current Password</label>
                                    	</div>
                                  	</div>
                                    <div class="row">
                                     	<div class="input-field col s12">
                                          <i class="material-icons prefix ">lock</i>
                                          <input id="npassword" type="password" name="npassword" class="validate" required>
											 <label for="npassword">New Password</label>
                                    	</div>
                                  	</div>
                                    <div class="row" id="message">
                                     	<div class="input-field col s12 m-0">
                                          
                                          <span class="red-text "><i class="material-icons left ">error_outline</i>Passwords not matching</span>
                                    	</div>
                                  	</div>
                                    <div class="row">
                                     	<div class="input-field col s12">
                                          <i class="material-icons prefix ">lock</i>
                                          <input id="rpassword" type="password" name="rpassword" class="validate" required>
                                          
                                          <label for="rpassword">Re-enter Password</label>
                                    	</div>
                                  	</div>
                                   <div class="row">
                                     <div class="input-field col s12 m12 l12 center">
                                          <button type="button" class="btn waves-effect waves-light blue modal-trigger" id="submit_btn"  data-target="modalcp"><i class="material-icons right">edit</i>Change
                                            
                                          </button>
                                    </div>
                                    
                                 </div>
                                  
                                    <!-- Modal Structure -->
                                      <div id="modalcp" class="modal">
                                        <div class="modal-content">
                                          <h4>Are you sure?</h4>
                                          <p>You are resetting your password </p>
                                         	
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="modal-close waves-effect waves-green btn-flat">Yes </button>
                                          <a href="#" class="modal-close waves-effect waves-green btn-flat">No</a>
                                        </div>
                                      </div>
                                     <!-- modal --> 
                                </form>
                             </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    
                    </div>
                    <div id="test2" class="col s12">
                    	<div class="row">
                        
                            <div class="col offset-l2 offset-m2 s12 m8 l6 ">
                              <div id="profile-card" class="card">
                                
                                <div class="card-content">
                               
                                  <span class="card-title activator grey-text text-darken-4">Change Display Name</span>
                                    <?php
										$con=mysqli_connect("localhost","root","") or die ("can not connect");
										mysqli_select_db($con,"aryareal_maindb") or die ("database not found");
										
										$sql="SELECT display_name FROM admin_login";
										$result=mysqli_query($con,$sql);
										$r=mysqli_fetch_assoc($result);
									?>
                                  <div class="row">
                                    <form action="query/change_display_name.php" method="post" >
                                      <div class="row">
                                        <div class="input-field col s12">
                                              <i class="material-icons prefix">account_circle</i>
                                              <input id="cdisplayname" type="text" name="cdisplayname" class="validate" value="<?php echo $r['display_name']; mysqli_close($con); ?>" required>
                                              <label for="cdisplayname">Currrent Display Name</label>
                                        </div>
                                       </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <i class="material-icons prefix ">edit</i>
                                              <input id="ndisplayname" type="text" name="ndisplayname" class="validate" required>
                                              <label for="ndisplayname">New Display Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <i class="material-icons prefix ">lock</i>
                                              <input id="npasword" type="password" name="npassword" class="validate" required>
                                              <label for="password">Password</label>
                                            </div>
                                        </div>
                                       
                                       <div class="row">
                                         <div class="input-field col s12 m12 l12 center">
                                             <button type="button" class="btn waves-effect waves-light blue modal-trigger"  data-target="modaldn"><i class="material-icons right">edit</i>Change </button>
                                             <a onclick = "showToast('Hello World!', 3000)" class="btn" id="tstt">Toast!</a>
                                              <a class="btn">click me to display toast</a>
                                        </div>
                                        
                                        
                                     </div>
                                      
                                        <!-- Modal Structure -->
                                          <div id="modaldn" class="modal ">
                                            <div class="modal-content">
                                              <h4>Ary You Sure?</h4>
                                              <p>You are changing display name </p>
                                              
                                            </div>
                                            <div class="modal-footer">
                                            <button type="submit" class="modal-close waves-effect waves-green btn-flat">Yes </button>
                                              <a id="clic" href="#" class="modal-close waves-effect waves-green btn-flat">No</a>
                                            </div>
                                          </div>
                                         <!-- modal --> 
                                    </form>
                                 </div>
                                </div>
                                
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
              </script> <a class="grey-text text-lighten-2" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">Arya Foundation</a> All rights reserved.</span>
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
		$('#message').hide();
	  	});
		$( "#disappear" ).fadeOut( 5000, function() {
		});
		
 $('#npassword, #rpassword').on('keyup', function () {
  if ($('#npassword').val() == $('#rpassword').val()) {
    /*$('#message').css('color', 'green');*/
	$('#message').hide();
	$('#submit_btn').prop('disabled', false);
  } else 
  {
    $('#message').show();
	$('#submit_btn').prop('disabled', true);
  }
 
  if ($('#npassword').val() =='' && $('#rpassword').val()=='') {
    /*$('#message').css('color', 'green');*/
	$('#submit_btn').prop('disabled', false);;
  }
  
});
	</script>
</body>
</html>