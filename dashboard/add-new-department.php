<?php
include "gets_user.php";
if($type=="admin")
{}
else
{
	header("Location:index");
}
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
	
	 <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <!--  END CUSTOM STYLE FILE  -->
	
	
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
                                            <h4> Add New Department   </h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form  autocomplete="off" method="POST" class="needs-validation" novalidate action="save-new-department" enctype="multipart/form-data">
                                        <div class="form-row">
                                            
                                            
                                            <div class="col-md-4  ">
                                                <label for="validationTooltipUsername">Department Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">Name:</span>
                                                    </div>
                                                    <input type="text" pattern="[A-Za-z]*" class="form-control" name="Name" id="validationTooltipUsername" placeholder="eg: xxxx" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                       Invalid Department Name
                                                    </div>
                                                </div>
												
												<br>
												<br>
												
												 <label for="validationTooltipUsername">Permission Type</label>
                                                
                                                  <select name="Permission" class="placeholder js-states form-control" required>
                                        <option value="" >Choose...</option>
                                        <option value="admin">Admin</option>
                                        <option value="supply">Supply</option>
                                        <option value="sale">Requester</option>
                                         
                                    </select>
                                                
											 <br>
											 <br>
 
											 <button class="btn btn-primary mt-2" type="submit" >Publish</button>
                                    	
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

	
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="plugins/select2/select2.min.js"></script>
    <script src="plugins/select2/custom-select2.js"></script>
	<script>
	$(".placeholder").select2({
    placeholder: "Make a Selection",
    allowClear: true
});
	</script>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
</body>

 </html>