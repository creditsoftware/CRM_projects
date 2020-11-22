<?php
include "gets_user.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
require 'head.php';
?>

<body class="sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
<?php
include 'top-header.php';
?>
		
	
	
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
<?php

include 'sidebar.php';

?>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">                
                    
                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                
 
                             
 
 

                               

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="work-experience" autocomplete="off" method="POST" class="section work-experience">
                                        <div class="info">
                                           
                                            <div class="row">
											
                                                
												
                                                <div class="col-md-11 mx-auto">

                                                    <div class="work-section">
                                                        <div class="row">

                                                            <div class="col-md-12">
<br>
<br>
<br>
                                                                <div class="form-group">
                                                                    <label for="degree2">Current Password*</label>
																	<b  id="password_err" class="form-text " style="color:#F57A81;display:no ne;" >Please Provide Valid Current Password*</b>
                                                                    <input  autocomplete="off" id="password" type="password" class="form-control mb-4"    name="fullname" placeholder="Enter Current Password"   required />
                                                              

															  </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="degree3">New Password*</label>
																			<b  id="newPassword_err" class="form-text " style="color:#F57A81;display:no ne;" >Should be at Least 8 Characters*</b>
																			<b  id="match" class="form-text " style="color:#F57A81;display:no ne;" >You Are Entering old Password | Please Change *</b>
                                                                                   <input  autocomplete="off" id="newPassword" name="accountNO" type="password"   class="form-control mb-4"   placeholder="New Password" required />
                                                                                                                                            </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="degree4">Confirm Password*</label>
																			<b id="cPassword_err" class="form-text " style="color:#F57A81;display:no ne;" >Not Matching</b>
                                                                            <input autocomplete="off" id="cPassword" type="password"   class="form-control mb-4"   placeholder="Confirm Password" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="row">
                                                               
																   
															 	
																
																  
																  <div class="col-md-4">
																  <br>
																  <br>
                                                         <input onclick="validate()" type="button"  class="btn btn-success btn-block " value="Update Password" />

																  </div> <div class="col-md-4">
																  
																  </div>
																
																
 																</div>
                                                            </div>

       <input id="pas"  style="display:none;" type="password" value="<?php echo $_SESSION["user_pass"];?>"     />
                                                                       
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
											
                                        </div>
										
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
<br>
<br>
   <script>
																 
																 document.getElementById('password_err').style.display="none";
																 
																  document.getElementById('newPassword_err').style.display="none";
																  document.getElementById('cPassword_err').style.display="none";
																  document.getElementById('match').style.display="none";
																  
																 
																  
																 function validate()
																 {
																	 
																	 document.getElementById('password_err').style.display="none";
																	 document.getElementById('match').style.display="none";
																 
																  document.getElementById('newPassword_err').style.display="none";
																  document.getElementById('cPassword_err').style.display="none";
																  
																 var current = document.getElementById('pas').value;
																 var enter = document.getElementById('password').value;
																 var newp = document.getElementById('newPassword').value;
																 var newcp = document.getElementById('cPassword').value;
																  if(current == enter)
																  {
																	  if(newp.length > 7)
																	  {
																		  if(newp == newcp)
																	  {
																		  if(newp!=current)
																		  {
																		  window.location="save-change-password?password="+newp;
																		  }
																		  else
																		  {
																			  document.getElementById('match').style.display="block";  
																		  }
																	  }
																	  else
																	  {
														 	   document.getElementById('cPassword_err').style.display="block"; 
																	    
																	  }
																	  }
																	  else
																	  {
																		   document.getElementById('newPassword_err').style.display="block"; 
																	  }
																  }
																  else
																  {
																	  document.getElementById('password_err').style.display="block";
																  }
																 }
																  
																  
                                                                  </script>
																  
<br>
<br>
<br>
<br>
<br>
<br>
                              <?php
			
			require 'footer_inner.php';
			
			?>
                </div>

                </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
 
   <?php 
   
   require 'footer.php';
   
   ?>
    <!--  END CUSTOM SCRIPTS FILE  -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo5/user_account_setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:09:59 GMT -->
</html>