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
            <div class="layout-px-spacing ">


                <!-- CONTENT AREA -->
                
<div class="row ">
<div class="col-md-1"  >
</div>
<div class="col-md-10" >
   <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

<center style="background-color:white;padding:10px;margin:5px;border:3px solid black;"><h1><b id="click"><span id="sec"> </span> Working</b></h1>
</center>
</div>



<div class="col-md-8">


<center>
 
</center>
 

</div>

 

</div>


                <!-- CONTENT AREA -->

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
   


    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo5/starter_kit_blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:11:36 GMT -->
</html>