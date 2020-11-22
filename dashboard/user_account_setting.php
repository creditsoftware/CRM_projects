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
                                    <form id="work-experience" autocomplete="off" action="save-user-profile-update" method="POST" class="section work-experience">
                                        <div class="info">
                                           <br>
                                           <br>
                                           <br>
                                           <br>
                                           <br>
                                            <div class="row">
											
                                                
												
                                                <div class="col-md-11 mx-auto">

                                                    
                                                          

                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>First Name*</label>

                                                                            <div class="row">

                                                                                <div class="col-md-12">
                                                                                       <input name="first"   type="text" value="<?php echo $first_name;?>" class="form-control mb-4" id="degree4" placeholder="First Name*"  required />
                                                                       
                                                                                </div>

               
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                  
																  
 <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>last Name*</label>

                                                                            <div class="row">

                                                                                <div class="col-md-12">
                                                                                       <input name="last"   type="text" value="<?php echo $last_name;?>" class="form-control mb-4" id="degree4" placeholder="Last Name *"  required />
                                                                       
                                                                                </div>

               
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                  
																	
																	 
																
																 <div class="col-md-4">
																 </div>
																  <div class="col-md-4">
																  <br>
																  <br>
                                                         <input href="javascript:void(0);" type="submit"  class="btn btn-success btn-block " value="Update Record" />

																  </div> <div class="col-md-4">
																  
																  </div>
																
																
 																</div>
                                                            </div>

 
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