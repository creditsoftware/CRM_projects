<?php

    session_start();
    if(!isset($_SESSION['user_email']))
    {

        header("Location: http://localhost/qrcode/code/home.php?uniqid=".$_GET['uniqid']); 
    }
    require_once('../connection.php');
    $result = $conn->query("select * from items where qr_data= '".$_GET['uniqid']."'");
    $arr = [];
    while($r = mysqli_fetch_assoc($result)) {
            
        $arr[] = $r;  
    }

?>

<?php
        require 'head.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->

            <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />

        <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->

            <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />

            <link href="plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />

        <!--  BEGIN CUSTOM STYLE FILE  -->

            <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />

            <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">

        <!--  END CUSTOM STYLE FILE  -->
            <style>
                .bold{
                    font-weight:bold;
                    text-shadow: 2px 2px 10px #000000;
                }
            </style>
    </head>
    <body>
            

        <!-- <div id="content" class="main-content"> -->
        <div class="cont ainer">
            <div class="container">
                <div class="row">
                    <div id="tooltips" class="col-lg-12 layout-spacing col-md-12">
                    <br>
                    <br>
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row justify-content-md-center">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h2 class = "pt-3 pb-0 text-center" > EzSupply Manager </h2>
                                    </div>                 
                                </div>
                            </div>
                            <?php
                                include '../connection.php';
                                $uniqid =$_GET['uniqid'];
                                $sql = "SELECT * FROM items where qr_data='$uniqid'";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $it_name   =    $row['it_name'];
                                $note      =    $row['note'];
                                $count     =    $row['count'];
                                $barco     =    $row['barco'];
                                $date      =    $row['date'];
                                $time      =    $row['time'];
                                $location  =    $row['location'];

                            ?> 
                            <div class="widget-content widget-content-area">
                                <div class="d-flex justify-content-between px-md-5 mx-md-5 py-3">
                                    <div>
                                    <h4 class="px-md-4 text-primary bold" id="validationTooltipUsernamePrepend"> Item Name:</h4>
                                    </div>
                                    <div>
                                    <h4 class="px-md-4 bold"><?php echo $it_name;?></h4>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between px-md-5 mx-md-5 py-3">
                                    <div>
                                    <h4 class="px-md-4 text-primary bold" id="validationTooltipUsernamePrepend">Quantity:</h4>
                                    </div>
                                    <div>
                                    <h4 class="px-md-4 bold"><?php echo $count;?></h4>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between px-md-5 mx-md-5 py-3">
                                    <div>
                                    <h4 class="px-md-4 text-primary bold" id="validationTooltipUsernamePrepend">Barcode:</h4>
                                    </div>
                                    <div>
                                    <h4 class="px-md-4 bold"><?php echo $barco;?></h4>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between px-md-5 mx-md-5 py-3">
                                    <div>
                                    <h4 class="px-md-4 text-primary bold" id="validationTooltipUsernamePrepend">Location:</h4>
                                    </div>
                                    <div>
                                    <h4 class="px-md-4 bold"><?php echo $location;?></h4>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between px-md-5 mx-md-5 py-3">
                                    <div>
                                    <h4 class="px-md-4 text-primary bold" id="validationTooltipUsernamePrepend">Date:</h4>
                                    </div>
                                    <div>
                                    <h4 class="px-md-4 bold"><?php echo $date;?></h4>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between px-md-5 mx-md-5 py-3">
                                    <div>
                                    <h4 class="px-md-4 text-primary bold" id="validationTooltipUsernamePrepend">Time:</h4>
                                    </div>
                                    <div>
                                    <h4 class="px-md-4 bold"><?php echo $time;?></h4>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between px-md-5 mx-md-5 py-3">
                                    <div>
                                    <h4 class="px-md-4 text-primary bold" id="validationTooltipUsernamePrepend">Note:</h4>
                                    </div>
                                    <div>
                                    <h4 class="px-md-4 bold">&nbsp;<?php echo $note;?></h4>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>



            </div>

            </div>
   

        <!-- </div>     -->

    </body>
</html>