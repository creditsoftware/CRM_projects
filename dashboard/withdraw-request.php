<?php

include "gets_user.php";

?>
<!DOCTYPE html>
<html lang="en">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
 <?php

require 'head.php';

?><head>
    
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
	    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
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
            <div class="cont ainer">
                <div class="container">

                    

                   

                    
                    <div class="row">
                        <div id="tooltips" class="col-lg-12 layout-spacing col-md-12">
						<br>
						<br>
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Invoice Payment Submission  Application Form:   </h4>
                                            &nbsp;&nbsp;&nbsp; <h6>Note: You Can Send withdraw Request Only On Every Saturday | Between 12:01 AM - 10:00 AM</h6>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form  autocomplete="off" method="POST" class="needs-validation" novalidate action="save-withdraw-amount" enctype="multipart/form-data">
                                        <div class="form-row">
                                            
                                            
                                            <div class="col-md-4  ">
                                                <label for="validationTooltipUsername">Enter Your Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">Password</span>
                                                    </div>
                                                    <input type="password"  class="form-control" name="invoice" id="validationTooltipUsername" placeholder="********" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                     Required Field
                                                    </div>
                                                </div>
												
												<br>
												
												 <label for="validationTooltipUsername">Withdraw Amount</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">Rs:</span>
                                                    </div>
                                                    <input type="number" class="form-control" name="transcation" id="validationTooltipUsernam" placeholder="0000" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                        Required Field
                                                    </div>
                                                </div>
											 <br>
											 <br>
 
										<?php
                                    	date_default_timezone_set("Asia/Karachi");
                                                   $day= date('D');
                                                   date_default_timezone_set("Asia/Karachi");
	                                        $time = date('h:ia');
	                                       $fix_time ='12:01am';
	                                       $fix_time2 ='10:00am';
	                                       
	                                            
                                                   if($day=="Sat")
                                                   {
                                                       
                                                 if(strtotime($time) >= strtotime($fix_time) &&  strtotime($time) <= strtotime($fix_time2))
	                                       {      
                            echo '<button class="btn btn-primary mt-2" type="submit" >Submit form</button>
                                   ';   
	                                       } else
                                                   {
                    echo '<span class="btn btn-warning mt-2" > You Can Request Only on Saturday Between 12:01 AM - 10:00 AM</span>
                                   ';                                   
                                                   }
                                   
                                                   }
                                                   else
                                                   {
                    echo '<span class="btn btn-warning mt-2" > You Can Request Only on Saturday Between 12:01 AM - 10:00 AM</span>
                                   ';                                   
                                                   }
                                    	
                                    	
                                    	?>
                                            </div>
											<div class="col-md-4 "> 
											  
											
											</div>
											 
                                        </div>
                                         
                                    </form>
 
 

                                </div>
                            </div>
                        </div>
                    </div>
           
                </div>
                </div>
        <?php
			
			require 'footer_inner.php';
			
			?>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
       
    <?php 
   
   require 'footer.php';
   
   ?>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="plugins/file-upload/file-upload-with-preview.min.js"></script>

    <script>
	//
	//

        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    <!-- END PAGE LEVEL PLUGINS -->  
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="assets/js/forms/bootstrap_validation/bs_validation_script.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
<?php
	if(isset($_SESSION['password_incorrect']))
 {
  echo '<script type="text/javascript">swal("Incorrect Password!", "You Entered incorrect Password Try Again!", "warning");</script>';
   
unset($_SESSION['password_incorrect']); }
  
	?>
	<?php
	if(isset($_SESSION['amount_grater']))
 {
  echo '<script type="text/javascript">swal("In-valid Enter Amount!", "Your Requested Amount is Grater Then Your Current Balence!", "warning");</script>';
   
unset($_SESSION['amount_grater']); }
  
	?>
	<?php
	if(isset($_SESSION['not_allow']))
 {
  echo '<script type="text/javascript">swal("Withdraw More!", "Your Cannot Withdraw this Amount its low!", "warning");</script>';
   
unset($_SESSION['not_allow']); }
  
	?><?php
	if(isset($_SESSION['suscribe']))
 {
  echo '<script type="text/javascript">swal("Packege Expired!", "Kindly Suscribe Packege For Transcation!", "warning");</script>';
   
unset($_SESSION['suscribe']); }
  
	?><?php
	if(isset($_SESSION['alerady']))
 {
  echo '<script type="text/javascript">swal("Alerady Submit!", "Your Request is Alerady Submit do wait for action by Admin", "warning");</script>';
   
unset($_SESSION['alerady']); }
  
	?>
	<?php
	if(isset($_SESSION['submit']))
 {
 echo '<script type="text/javascript">swal("Submission Successfully!", "Withdraw Request Submit Successfully Wait For Transcation by Admin", "success");</script>';
 
   
unset($_SESSION['submit']); }
  
	?>
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo5/form_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:09:29 GMT -->
</html>