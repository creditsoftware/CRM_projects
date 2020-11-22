<?php
include "gets_user.php";
?>


<!DOCTYPE html>

<html lang="en">
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

    <div id="load_screen">
        <div class="loader"> 
            <div class="loader-content">
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

                                            <h4> Edit item / Edit Selected Item</h4>

                                        </div>                 

                                    </div>

                                </div>

								<?php

								    include '../connection.php';

                                    $id = $_GET['ref'];
                                    $sql = "SELECT * FROM items where it_id='$id'";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    $it_name   =$row['it_name'];
                                    $note   =$row['note'];
                                    $count   =$row['count'];
                                    $barco   =$row['barco'];
                                    $location   =$row['location'];
                                    $qr_data   =$row['qr_data'];
                                ?>
                                <div class="widget-content widget-content-area">
                                    <form  autocomplete="off" method="POST" class="needs-validation" novalidate action="save-edit-item?item=<?php echo $id;?>" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-md-4  ">
                                                <label for="validationTooltipUsername">Product Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend"> Item Name:</span>
                                                    </div>
                                                    <input type="text" value="<?php echo $it_name;?>" pattern="[A-Za-z ]*" class="form-control" name="name" id="validationTooltipUsername" placeholder="eg: xxxx" aria-describedby="validationTooltipUsernamePrepend" required />
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
												<br>
												<label for="validationTooltipUsername">Quantity / Cases</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">#</span>
                                                    </div>
                                                    <input type="text" value="<?php echo $count;?>" pattern="[0-9]*" class="form-control" name="quan" id="validationTooltipUsername" placeholder="eg: 0000" aria-describedby="validationTooltipUsernamePrepend" required />
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
                                             <br>
                                             

                                             <!-- This is Barcode input part -->
                                             <label for="validationTooltipUsername">Barcode</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">#</span>
                                                    </div>
                                                    <input type="text" value="<?php echo $barco;?>" pattern="[0-9]*" class="form-control" name="barco" id="validationTooltipUsername" placeholder="eg: 0000" aria-describedby="validationTooltipUsernamePrepend" required />
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
                                                <input type="hidden" name="qr_url" class="qr-url" value="">

                                                <br>
                                                <!-- This is location input part -->
                                                <label for="validationTooltipUsername">Location</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">Location</span>
                                                    </div>
                                                    <input type="text" value="<?php echo $location;?>" class="form-control" name="location" id="validationTooltipUsername" placeholder="" aria-describedby="validationTooltipUsernamePrepend" required />
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
											 <button class="btn btn-primary mt-2" type="submit" >Update Item / Save Changes</button>
                                            </div>
										 <div class="col-md-4  ">
										 <br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">Note:</span>
                                                    </div>
                                                    <textarea  class="form-control" rows="15" name="note" id="validationTooltipUsername"  aria-describedby="validationTooltipUsernamePrepend" required><?php echo $note;?></textarea>
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
												<br>
                                        </div>
                                        <div class="col-md-4 qrcode-disp">
                                            
                                            <image src =" https://chart.googleapis.com/chart?chs=300x300&amp;cht=qr&amp;chl=http://localhost/qrcode/code/dashboard/qrview.php?uniqid=<?php echo $qr_data;?>"></image>
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
                    unset($_SESSION["name"]);
                    unset($_SESSION["quan"]);
                    unset($_SESSION["note"]); 
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