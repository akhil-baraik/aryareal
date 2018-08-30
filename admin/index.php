<?php
session_start();

if($_SESSION['username']!=null)
{
	header("location:dashboard.php");
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
    <title> Login Admin Panel | Arya Real EState</title>
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
                	                 
                     <a href="index.php" class="brand-logo hide-on-med-and-down "><img src="images/logo/arya-foundation-logo.png" alt="materialize logo" >
                     </a>
                </div>
                <div class="col s12 l4 m12">
                    <span class="logo-text center "><h4>Arya Foundation</h4></span>
                </div> 
                <div class="col s12 l4 m12">
                  <a class="waves-effect waves-light modal-trigger right" type="button" href="#modalhelp"  ><i class="material-icons">help</i></a>
                </div> 
                    
            </div>
          </div>
        </nav>
      </div>
      <!-- end header nav-->
    </header>
    <!-- Modal Structure -->
                              <div id="modalhelp" class="modal">
                                <div class="modal-content">
                                  <h4>Webdadz Technology</h4>
                                  <p class="blue-text">Please feel free to contact</p>
                                  <p><i class="material-icons left">mail</i>info@webdadz.com</p>
                                  <p><i class="material-icons left">phone</i> +91 9546749205 </p>
                                </div>
                                <div class="modal-footer">
                                  <a href="#" class="modal-close waves-effect waves-green btn-flat ">Ok</a>
                                </div>
                              </div>
                             <!-- modal --> 
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        
        
       
        <section id="content">
          <!--start container-->
          <div class="container">
           
           
            
            <!--card widgets start-->
            <div id="card-widgets">
              <div class="row">
                
                <div class="col offset-l2 offset-m2 s12 m8 l6 ">
                  <div id="profile-card" class="card">
                    <div class="card-image waves-effect waves-block waves-light gradient-45deg-light-blue-cyan">
                      <!--<img class="activator" src="images/gallary/3.png" alt="user bg">-->
                    </div>
                    <div class="card-content">
                   
                      <span class="card-title activator grey-text text-darken-4">Login </span>
                      
                      <div class="row">
                        <form action="query/login_check.php" method="post" >
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
                                  <input id="pasword" type="password" name="password" class="validate" required>
                                  <label for="password">Password</label>
                            </div>
                          </div>
                           <div class="row">
                             <div class="input-field col s12 m6 l6">
                                  <button type="submit" class="btn waves-effect waves-light blue"  >Login
                                    
                                  </button>
                            </div>
                            <div class="input-field col  s12 m6 s6">
                                  <button class="btn waves-effect waves-light yellow darken-3 modal-trigger" type="button" data-target="modal1"  >Forgot Password
                                    
                                  </button>
                            </div>
                         </div>
                          
                            <!-- Modal Structure -->
                              <div id="modal1" class="modal">
                                <div class="modal-content">
                                  <h4>Forgot Password</h4>
                                  <p>Please contact Webdadz Technology support team to reset password </p>
                                  <p><i class="material-icons left">phone</i> +91 9546749205 </p>
                                </div>
                                <div class="modal-footer">
                                  <a href="#" class="modal-close waves-effect waves-green btn-flat">Ok</a>
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
		$(document).ready(function(){
    $('.modal').modal();
	
  });
	</script>
    
     <script>
		$(document).ready(function(){
 
	$('.modalhelp').modal();
  });
	</script>
  </body>
</html>