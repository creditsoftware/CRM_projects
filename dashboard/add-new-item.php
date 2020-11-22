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
                                            <h4> Add New item / Register New Item</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form  autocomplete="off" method="POST" class="needs-validation" name = "needs-validation" novalidate action="save-new-item" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <?php
                                            $name = '';
                                                if(isset($_SESSION['name']))
                                                {
                                                    $name = $_SESSION["name"];
                                                }
                                            ?>
                                            <div class="col-md-4  ">
                                                <!-- This is Name input part -->  
                                                <label for="validationTooltipUsername">Product Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend"> Item Name:</span>
                                                    </div>
                                                    <input type="text" value="<?php echo $name;?>" pattern="[A-Za-z ]*" class="form-control" name="name" id="validationTooltipUsername" placeholder="eg: xxxx" aria-describedby="validationTooltipUsernamePrepend" required />
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
												<br>
                                                    <?php
                                                    $quan = '';
                                                        if(isset($_SESSION['quan']))
                                                        {
                                                            $quan = $_SESSION["quan"];
                                                        }
                                                    ?>	
                                                <!-- This is Quantity input part -->    							 
												<label for="validationTooltipUsername">Quantity / Cases</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">#</span>
                                                    </div>
                                                    <input type="text" value="<?php echo $quan;?>" pattern="[0-9]*" class="form-control" name="quan" id="validationTooltipUsername" placeholder="eg: 0000" aria-describedby="validationTooltipUsernamePrepend" required />
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
                                                    <input type="text" value="<?php echo $quan;?>" pattern="[0-9]*" class="form-control" name="barco" id="validationTooltipUsername" placeholder="eg: 0000" aria-describedby="validationTooltipUsernamePrepend" required />
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
                                                    <input type="text"  class="form-control" name="location" id="validationTooltipUsername" placeholder="" aria-describedby="validationTooltipUsernamePrepend" required />
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
                                            
                                                <input type="hidden" name="qr_url" class="qr-url" value="">
											 <button class="btn btn-primary mt-4" type="submit" >Publish Item / Add New Item</button>
                                            </div>
										 <div class="col-md-4  ">
										 <br>
                                                <?php
                                            $note = '';
                                                if(isset($_SESSION['note']))
                                                {
                                                    $note = $_SESSION["note"];
                                                }
                                            ?>								 
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">Note:</span>
                                                    </div>
                                                    <textarea  class="form-control" rows="15" name="note" id="validationTooltipUsername"  aria-describedby="validationTooltipUsernamePrepend" required><?php echo $note;?></textarea>
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
                                              
                                                <button class="btn btn-primary show-qr mt-3" type="button" >Generate QR Code</button>
                                            </div>
                                            <div class="col-md-4 qrcode-disp">

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

$(".show-qr").on("click",function(){
    var productName = document.forms["needs-validation"]["name"].value;
    var productQuan = document.forms["needs-validation"]["quan"].value;
    var productNote = document.forms["needs-validation"]["note"].value;
    var productBarco = document.forms["needs-validation"]["barco"].value;
    
    
    var totalData = "Name=\""+productName+"\" Quantity=\""+productQuan+"\" Note=\""+productNote+"\""
    var uniqid = '<?php echo uniqid();?>';
    var url = "http://localhost/qrcode/code/dashboard/qrview.php?uniqid="+ uniqid;
    $(".qrcode-disp").html("<img src='" + "https://chart.googleapis.com/chart?chs=300x300&amp;cht=qr&amp;chl=" + url + "'>");
   
    $(".qr-url").val(uniqid);

    console.log("https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=" + url)
})
	</script>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
</body>
 </html>