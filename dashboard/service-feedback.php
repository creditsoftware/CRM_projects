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

?>
<head>
    
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
                                        <div class="col-xl-4 col-md-4 col-sm-4 col-4">
                                            <h4> Submit Your Feedback  </h4>
                                            
                                        </div>               
										<?php
 
 
								include '../connection.php';
 									 

$order_id = $_GET['order-id'];

 $sql = "SELECT * FROM order_request 
 inner join registered_users on registered_users.user_id =  order_request.join_by
 
 where order_request.order_id='$order_id' 
 ";
$result = $conn->query($sql);
 
    $row = $result->fetch_assoc();
     
     $user_name	  =$row['user_name'];
     $emailaddress =$row['emailaddress'];
										
										?>

										<div class="col-xl-4 col-md-4 col-sm-4 col-4">
											<h4> Order Request #<?php echo $_GET['order-id'];  ?></h4>
                                           
                                            
                                        </div>
										<div class="col-xl-4 col-md-4 col-sm-4 col-4">
 <h4> Assign Agent : <?php echo $user_name;?> </h4>                                           
                                            
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                
    
 
<div class="row " >
    <div class="col-md-6 col-md-offset-3 form-container">
 
        <p>
            Please provide your feedback below:
        </p>
        <form role="form" action="mail?order-id=<?php echo $order_id;?>" method="post" id="">
           
		   <div class="row">
                <div class="col-sm-12 form-group">
                <label>How do you rate your overall experience?</label>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="Bad" required/>
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="Average" required/>
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="Good" required//>
                    Good
                    </label>
                </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="comments">
                        Comments:</label>
                    <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7" required></textarea>
                </div>
            </div>
            
                        <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
                </div>
            </div>

        </form>
 
        
    </div>
</div>
	
	
	
	
                                     
 
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