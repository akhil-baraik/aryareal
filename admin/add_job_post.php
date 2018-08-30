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
    <title>Add Job  | Arya Real EState</title>
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
                <li class="bold active">
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
                    	<div class="col s2 center" >
                            <div class="center padding-5 left"> <a  href="recruitment.php"class="btn waves-effect  yellow darken-3 btn-floating"><i class="material-icons">arrow_back</i></a></div>
                        </div>
                        <div class="col s8 center" >
                             <h5 class="blue-grey-text" id="akhil">Add Job</h5>
                        </div>
                        <div class="col s2 center" >
                        <?php
							include('database_connection.php');
							$sql="SELECT count(id) as total_jobs FROM job_post";
							
							$result=mysqli_query($con,$sql);
							$r=mysqli_fetch_assoc($result);
							$total_job=$r['total_jobs']+1;
							$job_id='JARE'.$total_job;
						?>
                             <div class="center grey-text padding-10">Jobs: <?php echo $r['total_jobs']; ?></div>
                                                
                        </div>
                    </div>
           		</div>
                <div class="row">
                	<div class="col s12 ">
                        <div class="header-search-wrapper  ">
                             <a href="recruitment.php">Job Post</a> <a href="add_job_post.php"> >> Add Job</a>
                        </div>
                    </div>    
                </div>
                <div class="divider"></div>
               <div class="overlay">	<div id="loader-img"></div></div>
                    <div class="overlay-success">
                    	<div id="loading-success"> 
                    		<!--<h2>Success</h2>-->
                            <img src="success.gif" width="100" height="100"/>
                    	</div>
                    </div>
                    
                <!-- message -->
                	 <div class="container"  id="message"> 
        <?php
				if(isset($_GET['res_id'])){
					if($_REQUEST['res_id']==1)
					{
					?>
						<div class="row green z-depth-3">
                        	<div class="col s10 white-text ">
                            	<h5 class="center"> Job Successfully Posted</h5>
                                
                            </div>
                            <div class="col s2 white-text ">
                            
                                <button type="button" class=" btn btn-floating right blue closemessage">X</button>
                            </div>
                        
                        </div>
        
					<?php
					
							
					}
					else if($_REQUEST['res_id']==2)
					{
					?>
						<div class="row red z-depth-3">
                        	<div class="col s10 center white-text  ">
                            <h5 class="center"> Error.. Try Again</h5>
                                                          
                            </div>
                            <div class="col s2 right white-text">
                            	<button type="button" class=" btn blue btn-floating right closemessage">X</button>
                            </div>
                        
                        </div>
					<?php
					}
				}
				?>
      </div>
                
                <!-- -->
              <div class="row ">
                <div class="col s12 ">
                  <div class="row">
                  	<form  class="job_form" action="query/insert_job.php" method="post" >
                          <div class="row">
                          
                            <div class="input-field col s12 m6 l4">
                            	<i class="material-icons  prefix ">star</i>
                                  <label for="job_id" class="dk">Job Id</label>
                                  <input id="job_id" type="text" name="job_id"  class="validate" readonly="readonly" required  value=" <?php echo trim($job_id); mysqli_close($con) ?>" >
                            </div>
                            <div class="input-field col s12 m6 l4">
                            	<i class="material-icons  prefix">work</i>
                                  <label for="post_name">Post / Designation Name</label>
                                  <input id="post_name" type="text" name="post_name" class="validate" required  >
                            </div>
                            <div class="input-field col s12 m6 l4">
                            	<i class="material-icons  prefix">location_on</i>
                                  <label for="city">City</label>
                                  <input id="city" type="text" name="city" class="validate" required  >
                            </div>
                          </div>
                           <div class="row">
                            <div class="input-field col s12 m6 l4">
                            		<i class="material-icons  prefix">date_range</i>
                                  <label for="post_date">Post Date</label>
                                  <input id="post_date" type="text" name="post_date"  class="validate datepicker"  required >
                            </div>
                          
                             <div class="input-field col s12 m6 l4">
                             	<i class="material-icons  prefix">date_range</i>
                             	  <label for="expire_date">Job Expire Date</label>
                                  <input id="expire_date" type="text" name="expire_date" class="validate datepicker" required>
                                  
                            </div>
                          </div>  
                          
                         	<div class="row">
                             <div class="input-field col s12 m4 l3">
                                <button type="submit" id="mainsbmt" class="btn waves-effect waves-light blue modal-trigger" data-target="modal1"  ><i class="material-icons right">send</i>Submit</button>
                                <!-- Modal Structure -->
                              <div id="modal1" class="modal">
                                <div class="modal-content">
                                  <h4>Post Job?</h4>
                                  
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" id="btnsubmit"class="waves-effect waves-green btn-flat">Yes</button>
                                   <button type="button" class="modal-close waves-effect waves-green btn-flat">No</button>
                                </div>
                              </div>
                             <!-- modal --> 
                            </div>
                         </div>
                      </form>
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
	     <script >
		$(document).ready(function(){
			
    $('.modal').modal();
	$('.datepicker').datepicker();
	
	
  });
  

  
  $('.closemessage').click( function(){
		$('#message').fadeOut('slow');
	});
	</script>
<!--<script type="text/javascript">
$(document).ready(function(){
     
    $('#sbmt').click(function() { /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
        
        $('#loader-img').show(); /* loader on */
        $(".overlay").show();
		// Get Data from Form
		var job_id= $('#job_id').val();
	 	var post_name= $('#post_name').val();
	 	var city=$('#city').val();
		var post_date=$('#post_date').val();
		var expire_date=$('#expire_date').val();
   
     	var dataString = "job_id="+job_id+ "&post_name="+post_name+"&city="+city+"&post_date="+post_date+"&expire_date="+expire_date; /* STORE THAT TO A DATA STRING */
     //alert(dataString);
     $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "query/insert_job.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: dataString, /* THE DATA WE WILL BE PASSING */
        success: function(result){ /* GET THE TO BE RETURNED DATA */
             $('#loader-img').hide();
             $(".overlay").hide();
			 $(".overlay-success").show();
			 $(".overlay-success").fadeOut(3000);
			 //alert(result);
            //window.location = "add_job_post.php";
           //("#akhil").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
        }
      });

    });
});
  </script>-->
  </body>
</html>