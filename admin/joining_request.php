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
    <title> Joining Request | Arya Real EState</title>
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
                
                <li class="bold active">
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
 
            <!--card widgets start-->
            <div id="card-widgets">
             
                <!--Hoverable Table-->
            <div class="divider"></div>
            	<div id="hoverable-table">
                <div class="row">
            	<div class="col s12 card" >
                    <div class="row">
                        <div class="col s10" >
                            <h5 class="blue-grey-text center">All MLM Joining Requests</h5>
                        </div>
                        <div class="col s2" >
                        <?php
                    		include('database_connection.php');
                    
							$sql="SELECT count(id) as num FROM forms ";
							$result=mysqli_query($con,$sql);
							$r=mysqli_fetch_assoc($result);
							
							$sqlu="SELECT count(id) as numu FROM forms where status='Unattended'";
							$resultu=mysqli_query($con,$sqlu);
							$ru=mysqli_fetch_assoc($resultu);
							
							$sqla="SELECT count(id) as numa FROM forms where  status='Attended'";
							$resulta=mysqli_query($con,$sqla);
							$ra=mysqli_fetch_assoc($resulta);
						?>
                             <span class="vertical-align-center grey-text">Total: <?php echo $r['num']; ?></span>                  
                        </div>
                    </div>
           		</div>
                
                <div class="col s8 ">
                	<div class="header-search-wrapper  padding-1  ">
                    	<i class="material-icons left">search</i>
           				 <input type="text" name="Search" class="header-search-input z-depth-2"  id="search_field" placeholder="Search by anything">
          			</div>
                    <div class="overlay">	<div id="loader-img"></div></div>
                    <div class="overlay-success">
                    	<div id="loading-success"> 
                    		<!--<h2>Success</h2>-->
                            <img src="success.gif" width="100" height="100"/>
                    	</div>
                    </div>
                </div>
                <div class="col s4 center">
               		<div class="header-search-wrapper ">
                        <p>Unattended: <?php echo $ru['numu']; ?></p>
                        <p>Attended:<?php echo $ra['numa']; ?> </p>
                    </div>
               </div>
               </div>
              </div>
              <div class="row">
                <div class="col s12 ">
                  <table class="striped centered" >
                    <thead>
                      <tr >
                        <!--<th>#</th>-->
                        <th>Id</th>
                        <th>Applicant Name</th>
                        <th>Direct Id</th>
                        <th>Email ID</th>
                        <th>Mobile No</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="center">Action</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
                    <?php
                    $limit = 10;  
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
					$start_from = ($page-1) * $limit;
                    
                    $sql="SELECT * FROM forms order by declaration_date desc LIMIT $start_from, $limit";
                    $result=mysqli_query($con,$sql);
					
                    //$slno=1;
					$sl_no=1;
                    while($r=mysqli_fetch_array($result))
                    {
                    echo '<tr>';
                    /*echo '<td>'.$sl_no.'</td>';*/
                    echo '<td>'.$r['id'].'</td>';
                    echo '<td>'.$r['applicant_name'].'</td>';
					echo '<td>'.$r['direct_id'].'</td>';
					echo '<td>'.$r['email_id'].'</td>';
					echo '<td>'.$r['mobile_no'].'</td>';
					echo '<td>'.$r['declaration_date'].'</td>';
					echo '<td><select class="myDropDown">
					<option>'.$r['status'].'</option>
					<option> ';if($r['status']=="Attended"){echo 'Unattended';} else{ echo 'Attended';} '</option>
					</select>
					</td>';
					echo '<td class="center"><a href="view_joining_request.php?id='.$r['id'].'&page='.$_GET['page'].'" class="btn wave-effect"><i class="material-icons right">remove_red_eye</i>View</a></td>';
					$sl_no++;
					echo "</tr>";
					}
					
					?>
 
                    </tbody>
                  </table>
                  <?php  
						$sql = "SELECT COUNT(id) FROM forms";  
						$rs_result = mysqli_query($con,$sql);  
						$row = mysqli_fetch_row($rs_result);  
						$total_records = $row[0];  
						$total_pages = ceil($total_records / $limit);  
						$previous_page=$page-1;
						echo '<ul class="pagination center">';
						if($page!=1)
						{
							
							echo '<li class="waves-effect"><a href="joining_request.php?page='.$previous_page.'"><i class="material-icons">chevron_left</i></a></li>';			
						}
						else
						{
							echo '<li class="disabled"><a><i class="material-icons">chevron_left</i></a></li>';
						}
						for ($i=1; $i<=$total_pages; $i++) {  
						if($page==$i)
								{
									 echo' <li class="active"><a class="center" href="joining_request.php?page='.$i.'">'.$i.'</li> ';
									
								}
								else
								{
									 echo' <li class=""><a  href="joining_request.php?page='.$i.'">'.$i.'</li> ';
									
								}
		
						}
						
							$next_page=$page+1;
							if($page==$total_pages)
							{
								echo '<li class="disabled"><a ><i class="material-icons">chevron_right</i></a></li>
						 </ul>';
							}
							else{
							echo '<li class=" waves-effect"><a href="joining_request.php?page='.$next_page.'"><i class="material-icons">chevron_right</i></a></li>
						 </ul>';
							}
						mysqli_close($con); 
					?>
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
<script type="text/javascript">
$(document).ready(function(){
     
    $('select.myDropDown').on('change',function() { /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
        
        $('#loader-img').show(); /* loader on */
        $(".overlay").show();
		
        var status = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
        var id=$(this).closest('tr').children('td:first').text();
      // alert(status);
      //alert(stat+" "+id);
	  var pageName =document.location.href.match(/[^\/]+$/)[0];
            
      var dataString = "idforquery="+id+'&status='+status+'&pagename='+pageName; /* STORE THAT TO A DATA STRING */
     //alert(dataString);
     $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "query/change_status.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: dataString, /* THE DATA WE WILL BE PASSING */
        success: function(result){ /* GET THE TO BE RETURNED DATA */
             $('#loader-img').hide();
             $(".overlay").hide();
			 $(".overlay-success").show();
			 $(".overlay-success").fadeOut(3000); 
         // $("#search_field").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
        }
      });

    });
});
  </script>
  </body>
</html>