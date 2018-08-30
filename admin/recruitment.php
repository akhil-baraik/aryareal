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
    <title> Recruitment | Arya Real EState</title>
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
                <div class="row">
            	<div class="col s12 card" >
                    <div class="row">
                        <div class="col s10" >
                            <h5 class="blue-grey-text center">All Posted Jobs</h5>
                        </div>
                        <div class="col s2" >
                        <?php
                            include('database_connection.php');
                            
                            $sql="SELECT count(id) as num FROM job_post";
                            $result=mysqli_query($con,$sql);
        					$r=mysqli_fetch_assoc($result);
        				?>
                                 
                             <div class="padding-5"> <a href="add_job_post.php" class="btn lg"><i class="material-icons right">add</i>Add</a></div>
                        </div>
                    </div>
           		</div>
                
                <div class="col s8 ">
                	<div class="header-search-wrapper padding-1">
                	    <i class="material-icons left">search</i>
           				 <input type="text" name="Search" class="header-search-input z-depth-2"  id="search_field" placeholder="Search by anything">
          			</div>
                </div>
                
                <div class="col s4 center">
               		<div class="header-search-wrapper ">
                        <p>Total: <?php echo $r['num'];?></p>
                       
                    </div>
               </div>
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
                            	<h5 class="center"> Job Updated</h5>
                                
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
					
					else if($_REQUEST['res_id']==3)
					{
					?>
						<div class="row blue z-depth-3">
                        	<div class="col s10 center white-text  ">
                            <h5 class="center"> Job Deleted Successfully</h5>
                             <h6 class="center"> Job Id: <?php echo $_REQUEST["job_id"] ?></h6>                             
                            </div>
                            <div class="col s2 right white-text">
                            	<button type="button" class=" btn yellow darken-3 btn-floating right closemessage">X</button>
                            </div>
                        
                        </div>
					<?php
					}
				}
				?>
      </div>
		<!-- message-->
              <div class="row">
                <div class="col s12  z-index-2">
                  <table class="striped centered" >
                    <thead>
                      <tr>
                        <!--<th>#</th>-->
                        <th>Sl No</th>
                        <th>Job Id</th>
                        <th>Post Name</th>
                        <th>City</th>
                        <th>Posting Date</th>
                        <th>Last Date</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
                    <?php
                    $limit = 2;  
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
					$start_from = ($page-1) * $limit;
                    
                    $sql="SELECT * FROM job_post  order by current_time_date desc LIMIT $start_from, $limit";
                    $result=mysqli_query($con,$sql);
					
                    //$slno=1;
					$sl_no=1;
                    while($r=mysqli_fetch_array($result))
                    {
                     echo '<tr>';
                    /*echo '<td>'.$sl_no.'</td>';*/
                    echo '<td>'.$sl_no.'</td>';
					echo '<td>'.$r['job_id'].'</td>';
                    echo '<td>'.$r['post_name'].'</td>';
					echo '<td>'.$r['city'].'</td>';
					echo '<td>'.$r['post_date'].'</td>';
					echo '<td>'.$r['last_date'].'</td>'; 
					echo '<td ><a href="edit_job_post.php?job_id='.$r['job_id'].'&page='.$page.'" class="btn btn-floating"><i class="material-icons">edit</i></a></td>';
					echo '<td ><a href="#modal'.$r['job_id'].'" class="btn btn-floating red darken-1 modal-trigger"><i class="material-icons">delete</i></a></td>';
					/*echo '<td><img  src=\'avatar.png\' class="img-rounded" alt="Image Not Loaded" width="80" height="80"/></td>';*/
					$sl_no++;
					?>
					<!-- Modal Structure -->
                              <div id="modal<?php echo $r['job_id'] ?>" class="modal">
                                <div class="modal-content">
                                  <h4>Delete Job?</h4>
                                  <p>Job Id: <?php echo $r['job_id'];?>  </p>
                                </div>
                                <div class="modal-footer">
                                  <a href="query/delete_job.php?job_id=<?php echo $r['job_id'];?>" type="submit" id="btnsubmit"class="waves-effect waves-green btn-flat">Yes</a>
                                   <button type="button" class="modal-close waves-effect waves-green btn-flat">No</button>
                                </div>
                              </div>
                             <!-- modal --> 
					<?php echo "</tr>";
					}
					
					?>
                   
                      
                    </tbody>
                  </table>
                   <?php  
						$sql = "SELECT COUNT(id) FROM job_post";  
						$rs_result = mysqli_query($con,$sql);  
						$row = mysqli_fetch_row($rs_result);  
						$total_records = $row[0];  
						$total_pages = ceil($total_records / $limit);  
						$previous_page=$page -1;
						echo '<ul class="pagination center">';
						if($page!=1)
						{
							
							echo '<li class="waves-effect"><a href="recruitment.php?page='.$previous_page.'"><i class="material-icons">chevron_left</i></a></li>';			
						}
						else
						{
							echo '<li class="disabled"><a><i class="material-icons">chevron_left</i></a></li>';
						}
						for ($i=1; $i<=$total_pages; $i++) {  
						if($page==$i)
								{
									 echo' <li class="active"><a class="center" href="recruitment.php?page='.$i.'">'.$i.'</li> ';
									
								}
								else
								{
									 echo' <li class=""><a  href="recruitment.php?page='.$i.'">'.$i.'</li> ';
									
								}
		
						}
						
							$next_page=$page+1;
							if($page==$total_pages)
							{
								echo '<li class="disabled"><a ><i class="material-icons">chevron_right</i></a></li>
						 </ul>';
							}
							else{
							echo '<li class=" waves-effect"><a href="recruitment.php?page='.$next_page.'"><i class="material-icons">chevron_right</i></a></li>
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
	$('.closemessage').click( function(){
		$('#message').fadeOut('slow');
	});
	
  });
	</script>
  </body>
</html>