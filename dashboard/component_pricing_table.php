<?php

include "gets_user.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
 <?php

require 'head.php';

?>

<head>
   
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
    <link href="plugins/pricing-table/css/component.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
</head>
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
                
                <div class="row" id="cancel-row">

                    

                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>All Packeges</h4>
                                    </div>           
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="container">                                    
                                    <div id="pricingWrapper" class="row">
                                       	 	<?php
											
											
											
								 	
						   include '../connection.php';
						   $sql = "SELECT * FROM invoice where user_id='$user_id' and is_active='yes'";
$flag="no";
                       $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 $flag="yes";
 }                 $row = $result->fetch_assoc();
							 
								  $cuurent_pkg_id = $row['pkg_id'];
			
					
					
include '../connection.php';
$sql = "SELECT * FROM packeges_plan where  is_dell='no'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     
	
    while($row = $result->fetch_assoc())
     {
		  
  $pkg_id = $row['pkg_id'];

									   
								echo' 	   <div class="col-md-6 col-lg-4">
                                            <div class="card stacked mt-5">
                                                <div class="card-header pt-0">
                                                    <span  class="card-price" style="width:290px;">Rs:'.number_format($row['monthly']).'</span>
                                                    <h3 class="card-title mt-3 mb-1">'.$row['title'].'</h3>
                                                    <p>Dear '.$fullname.' You Can Suscribe Only One Packege At a Time.</p>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-minimal mb-3">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Daily Ad : '.$row['daily_ad'].'
                                                        </li>
                                             <li class="list-group-item d-flex justify-content-between align-items-center">Per Click Earn Rs : '.$row['per_click_earn'].'
                                          </li>
                                           <li class="list-group-item d-flex justify-content-between align-items-center">Per Day Earn Rs : '.number_format($row['per_click_earn']*$row['daily_ad']).'
                                          </li>
                                           <li class="list-group-item d-flex justify-content-between align-items-center">Total Earning Rs : '.number_format($row['per_day_earn']*$row['validity']).'
                                          </li>
                                                        
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Minimum Withdraw Rs : '.$row['mini_withdraw'].'
                                                        </li><li class="list-group-item d-flex justify-content-between align-items-center">Validity '.$row['validity'].' Days
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Referral : '.$row['refe'].'%
                                                        </li>
                                                    </ul>';
													if($flag=="no")
													{
                                                  echo'  <a href="#" Onclick="Generate_invoice('.$pkg_id.')" class="btn btn-block btn-success">Buy Now</a>';
													}
													else
													{
														if($cuurent_pkg_id==$pkg_id)
														{
								   echo'  <a href="#" class="btn btn-block btn-success">Alerady Active</a>';	
														}
														else
														{
	 	       echo'  <a href="#" class="btn btn-block btn-warning">For Activation Contact Admin</a>';							
														}
													}
                                                echo '</div>
                                            </div>
                                        </div>   ';
										}}
else
{
	echo "<center><h4 style='color:orange'>No Packege Available Yet! Stay Connected Comming Soon </h4></center>";
}	
	

										
                                   
?>
								 
                                       

									  
                                    </div>

                                    <div class="code-section-container">
                                                
  
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
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
   
<script>
						
						function Generate_invoice(id)
						{
	 
							swal({
  title: "Generate Your Invoice For This Packege?",
  text: "You Can Activate Only One Packege At a time!Press Ok and You Have To Pay Your Invoice For Packege Activation",
  icon: "info",
  buttons: true,
  dangerMode: false,
})
.then((willDelete) => {
  if (willDelete) {
    swal("You New Invoice has been Generated Successfuly!", {
      icon: "success",
    });
	window.location="generate-invoice?id="+id;
  }  
});
 
						}
						
						</script>

   <script>        
        var getInputStatus = document.getElementById('radio-6');
        var getPricingContainer = document.getElementsByClassName('pricing-plans-container')[0];
        var getYearlySwitch = document.getElementsByClassName('billed-yearly-radio')[0];
        getInputStatus.addEventListener('change', function() {
            var isChecked = getInputStatus.checked;
            if (isChecked) {
                getPricingContainer.classList.add("billed-yearly");
                getYearlySwitch.classList.add("billed-yearly-switch");
            } else {
                getYearlySwitch.classList.remove("billed-yearly-switch");
                getPricingContainer.classList.remove("billed-yearly");
            }
        })
    </script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo5/component_pricing_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:08:44 GMT -->
</html>