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
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form  autocomplete="off" method="POST" class="needs-validation" novalidate action="save-application.php" enctype="multipart/form-data">
                                        <div class="form-row">
                                            
                                            
                                            <div class="col-md-4  ">
                                                <label for="validationTooltipUsername">Invoice ID</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">#</span>
                                                    </div>
                                                    <input type="text" pattern="[0-9]*" class="form-control" name="invoice" id="validationTooltipUsername" placeholder="eg: 00000" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                       Invalid Invoice ID 
                                                    </div>
                                                </div>
												
												<br>
												
												 <label for="validationTooltipUsername">Transcation ID</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">#</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="transcation" id="validationTooltipUsernam" placeholder="Transaction ID" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                        Required Field
                                                    </div>
                                                </div>
											 <br>
											 <br>
 
											 <button class="btn btn-primary mt-2" type="submit" >Submit form</button>
                                    	
                                            </div>
											<div class="col-md-4 "> 
											 
                                                <div class="custom-file-container" data-upload-id="myFirstImage">
    <label>Upload Proof ScreenShot <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
    <label class="custom-file-container__custom-file" >
        <input  name="file" type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" required />
        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
        <span class="custom-file-container__custom-file__custom-file-control"></span>
    </label>
    <div class="custom-file-container__image-preview"></div>
</div>
                                          
											
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
	if(isset($_SESSION['invaild']))
 {
  echo '<script type="text/javascript">swal("Invalid Invoice ID!", "You Entered Invalid Invoice-ID!", "warning");</script>';
   
unset($_SESSION['invaild']); }
  
	?><?php
	if(isset($_SESSION['badme']))
 {
  echo '<script type="text/javascript">swal("Alerady Submit From This Invoice ID!", "Alerady Submit Application!", "warning");</script>';
   
unset($_SESSION['badme']); }
  
	?>
	<?php
	if(isset($_SESSION['valid']))
 {
 echo '<script type="text/javascript">swal("Submission Successfully!", "Application Form Successfully Submit", "success");</script>';
 
   
unset($_SESSION['valid']); }
  
	?>
</body>

 </html>