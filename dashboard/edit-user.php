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
                                            <h4> Edit User / Selected User  </h4>
                                        </div>                 
                                    </div>
                                </div>
								<?php
								
								$id= $_GET['ref'];
								include '../connection.php';
 									 

 
 $sql = "SELECT * FROM registered_users where user_id='$id'";

$result = $conn->query($sql);
 
    $row = $result->fetch_assoc();
     
    $first_name   =$row['first_name'];
 
     $last_name   =$row['last_name'];
	 $user_name	=$row['user_name'];
	 $emailaddress=$row['emailaddress'];
	 $password=$row['password'];
	  $dept	 = $row['dept'];
 
	 $gender=$row['gender'];
								
								
								?>
                                <div class="widget-content widget-content-area">
                                    <form  autocomplete="off" method="POST" class="needs-validation" novalidate action="save-edit-user?id=<?php echo $id;?>" enctype="multipart/form-data">
                                        <div class="form-row">
 
                               
                                            
                                            <div class="col-md-4  ">
                                                <label for="validationTooltipUsername">First Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend"> First Name:</span>
                                                    </div>
                                                    <input type="text" value="<?php echo $first_name;?>" pattern="[A-Za-z ]*" class="form-control" name="fname" id="validationTooltipUsername" placeholder="eg: jhon" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
												
												<br>
 
   										 
												<label for="validationTooltipUsername"> Unique User Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">  User Name:</span>
                                                    </div>
                                                    <input type="text" value="<?php echo $user_name;?>" pattern="[A-Za-z0-9_-]*" class="form-control" name="username" id="validationTooltipUsername" placeholder="eg: jackjon" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
                                                
											 <br>
											 
										         						 
												 <label for="validationTooltipUsername">Assign Department</label>
                                          
									<select class=" placeholder js-states form-control nested" name="dept" required>
									   <option value="" >Choose...</option>
    <optgroup label="Admin Departments List">
        													 	 <?php
					
					// for connection

include '../connection.php';

 
 $sql = "SELECT * FROM department where type='admin' and  is_dell='no'";

$result = $conn->query($sql);
  
    while($row = $result->fetch_assoc())
     {
		 
		 $apples = $row['dept_id']; 
		 $Apples = $row['dept_name'];
if($dept==$apples)
{
echo   "<option selected value ='".$apples."'>".$Apples."</option>";
		
}	
else
{
	echo   "<option value ='".$apples."'>".$Apples."</option>";
	
}
     
	
	 }
 
		?>
														 
    </optgroup>
    <optgroup label="Supply Departments List">
                  													 	 <?php
					
					// for connection

include '../connection.php';

 
 $sql = "SELECT * FROM department where type='supply' and  is_dell='no'";

$result = $conn->query($sql);
  
    while($row = $result->fetch_assoc())
     {
		 $apples = $row['dept_id']; 
		 $Apples = $row['dept_name']; 
     
if($dept==$apples)
{
echo   "<option selected value ='".$apples."'>".$Apples."</option>";
		
}	
else
{
	echo   "<option value ='".$apples."'>".$Apples."</option>";
	
}
	 }
 
		?>
    </optgroup>
    <optgroup label="Sale Departments List">
                 													 	 <?php
					
					// for connection

include '../connection.php';

 
 $sql = "SELECT * FROM department where type='sale'   and  is_dell='no'";

$result = $conn->query($sql);
  
    while($row = $result->fetch_assoc())
     {
		 $apples = $row['dept_id']; 
		 $Apples = $row['dept_name']; 
     
if($dept==$apples)
{
echo   "<option selected value ='".$apples."'>".$Apples."</option>";
		
}	
else
{
	echo   "<option value ='".$apples."'>".$Apples."</option>";
	
}
	 }
 
		?>
    </optgroup>
</select>
 
											 <button class="btn btn-primary mt-2" type="submit" >Update User / Save Account</button>
    	
                                            </div>
										 <div class="col-md-4  ">
                                                 <label for="validationTooltipUsername">Last Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend"> Last Name:</span>
                                                    </div>
  
   											         
													<input type="text" pattern="[A-Za-z ]*" value="<?php echo $last_name;?>" name="lname" class="form-control"  id="validationTooltipUsername" placeholder="eg: jack" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    
													
													<div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
												
												<br>
 
   											 
												
												<label for="validationTooltipUsername"> Unique User Email:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">  Eamil:</span>
                                                    </div>
                                                    <input type="email" value="<?php echo $emailaddress;?>"   class="form-control" name="email" id="validationTooltipUsername" placeholder="eg: abc@xyz.com" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
												
                                                
											 <br/>
											                     
 <?php
								
								$id= $_GET['ref'];
								include '../connection.php';
 									 

 
 $sql = "SELECT * FROM registered_users where user_id='$id'";

$result = $conn->query($sql);
 
    $row = $result->fetch_assoc();
     
	 $password=$row['password'];
	  
  
								
								
								?>
    
											<label for="validationTooltipUsername">User Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">  Current:</span>
                                                    </div>
                                                    <input style="background-color:#e8e5e5;" type="text"  class="form-control" name="password" value="<?php echo $password;?>"  id="validationTooltipUsername" placeholder="*****" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
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
	
	
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="plugins/select2/select2.min.js"></script>
    <script src="plugins/select2/custom-select2.js"></script>
	<script>
	$(".placeholder").select2({
    placeholder: "Make a Selection",
    allowClear: true
});
$(".nested").select2({
    tags: true
});
	</script>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
</body>

 </html>