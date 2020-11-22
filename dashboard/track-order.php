<?php
include "gets_user.php";

?>
<!DOCTYPE html>
<html lang="en">

<?php

require 'head.php';

?>
<head>
        <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/forms/custom-clipboard.css" />
    <!--  END CUSTOM STYLE FILE  -->    
     <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
</head>

<body>
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
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
<?php

include 'sidebar.php';

?>

        </div>
        <!--  END SIDEBAR  -->
          
     
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-spacing">
               <!-- Content -->
                   
 
             <div class="  col-md-2   layout-top-spacing">
                     </div>

					 
					
					 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12  layout-top-spacing">
                        <div class="widget widget-five" style="padding:20px;">
						<div class="widget-heading">
                            <center>    <h5 class="">Track Your "Order Request"</h5></center>
                            </div>
                            <div class="widget-content">

                                

                                <div class="w-content">
                                     
									 <div class="widget-account-invoice-one"  >

 
                            <div class="widget-content">
                                <div class="invoice-box">
                                    
                                    

                                    <div class="inv-detail">                                        
                                         
										     <div class="clipboard">
    <form class="form-horizontal">
        
        <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">#</span>
                                                    </div>
                                                    <input type="text" pattern="[0-9]*" class="form-control" name="invoice" id="validationTooltipUsername" placeholder="eg: 00000" aria-describedby="validationTooltipUsernamePrepend" required="">
                                                     
                                                </div>
												<br>
        <center><a class="btn btn-primary"  >
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
		Track Order</a>
 </center>
    </form>
</div> 

										 
                                    </div>

                                    <p class="task-completed"><span>   Order Request #0000</span></p>
                                   
                                </div>
							
                            </div>

                        </div>
						
                                </div>
									 <p class="task-co mpleted"><span> <b>  1)Your Order Has Started:</b></span><br>
									 <center><u>7-Jul-2020 , 1:00pm<u/></center>
									 
									 </p>
                                    <p class="task-co mpleted"><span>   <b>  2)Supply Agent Working Order Request:</b></span>
									<center><u>XXX Join Order on 7-Jul-2020, 3:00pm</u></center></p>
                                    <p class="task-co mpleted"><span>   <b>  3)Order Ready For Shipping / Pickup:</b></span>
									<center><u>7-Jul-2020, 1:30pm</u></center></p>
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
  
<!--  BEGIN CUSTOM SCRIPT FILE  -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script>
        $('#yt-video-link').click(function () {
            var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
            $('#videoMedia1').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia1 .video-container');
        });
        $('#vimeo-video-link').click(function () {
            var src = 'https://player.vimeo.com/video/1084537';
            $('#videoMedia2').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia2 .video-container');
        });
        $('#videoMedia1 button, #videoMedia2 button').click(function () {
            $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
        });
    </script>    
    <!--  END CUSTOM SCRIPT FILE  -->
    
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo5/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:06:38 GMT -->
</html>