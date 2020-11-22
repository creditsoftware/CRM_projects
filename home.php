<?php 
session_start();
if(isset($_SESSION['user_email']))
{
    if($_GET['uniqid']){
        header("Location: http://localhost/qrcode/code/dashboard/qrview.php?uniqid=".$_GET['uniqid']); 
    }else{
        header("Location:dashboard/index");
    }
}
else{
}
?>

<?php
    include 'connection.php';
    $pasu=":p";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = strtolower($_POST['username']);
            $password =  $_POST['password'];
            $sql = "SELECT * FROM  registered_users where   password='$password' and is_dell = 'no'	 and emailaddress='$username'  and password='$password' and is_dell = 'no' ";
            $result = $conn->query($sql);
            $pasu=":p";
            $use=":p";
            if ($result->num_rows > 0) {

                $_SESSION["user_email"] = $username;
                $_SESSION["user_pass"] = $password;
                if($_GET['uniqid']){
                    header("Location: http://localhost/qrcode/code/dashboard/qrview.php?uniqid=".$_GET['uniqid']); 
                }else{
                    header('Location:index');
                }
            }
            else if ($result->num_rows < 1) {
                $sql = "SELECT * FROM  registered_users where emailaddress='$username' and is_dell = 'no' 	";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                    $pasu="POST";
                }
                else{
                    $pasu="POST";
                }
            }
        }
?>
<!DOCTYPE html>
<html >
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home | EzSupplyManager</title>
        <link rel="icon" type="image/png" href="icon.png" sizes="32x32">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

        
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        
        
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <head> 
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
        <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
    </head>
    <style> 
        body {
            background-image: url("img/hero/back.png");
        }
        .f{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <body >
        <div id="preloder">
            <div class="loader"></div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12  col-md-3  col-lg-3 ">
                    <div class="header__logo">
                        <a href="index"><img class="img-responsive" src="logo.png" alt=""></a>
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-12  col-md-9  col-lg-9 ">
                    <br>
                    <br>
                    <center>
                        <marquee direction="left" style="border:2px solid black;color:orange;" height="30" width="80%" bgcolor="white">
                            <b>
                            <?php

                                include 'connection.php';
                                $sql = "SELECT * FROM registered_users";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                echo  $notif   =$row['notif'];
                                            
                            ?>
                            </b>
                        </marquee>
                    </center>
                </div>
            </div>

    
            <div class="row">
                <div class="example  col-lg-4 ">
                    <br>
                    <br>
                    <div class="hero__text" id="test"  style="padding:0px;">
                        <img class="img-responsive"  src="img/about-us.png"/>
                        <br>
                        <h5 class="f" style="color:white;">EzSupply Manager</h5>
                        <h2 class="f" style="color:white;">Welcome To A Centerlized Supply Solution</h2>
                        <a style="color:white;" href="#" class="primary-btn">Keeping Warehouse Supply,Demand and Inventory Simple</a>
                    </div>
                </div>
                
                <div class="example  col-lg-4 ">
                    <section>
                        <br><br>
                        <div class="container" id="topi">
                            <div class="row d-flex justify-content-center">
                                <div class="">
                                    <div class="register__text">
                                        <div class="register__form">
                                            <a style="display:none;" id="go" href="#invalid">Go</a>
                                            <div class="form-form" id="invalid">
                                                <div class="form-form-wrap">
                                                    <div class="form-container" style="min-height:0%;">
                                                        <div class="form-content">

                                                            <h1 class="">Sign In</h1>
                                                            <p class="" style="margin-bottom:15px;">Log-in to your account to continue</p>

                                                            <?php
                                                                if ($pasu == "POST")
                                                                {
                                                                    echo '<br><b style="background-color:#F8D7DA; padding:20px;" >Invalid!</b><br><br>';
                                                                }
                                                            ?>   

                                                            <form class="text-left" method="POST" autocomplete="off">
                                                                <div  >

                                                                    <div id="username-field" class="field-wrapper input">
                                                                        <label for="username">USERNAME</label>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                                        <input id="username" name="username" type="text" class="form-control" placeholder="example@example.com"   required />
                                                                </div>

                                                                    <div id="password-field" class="field-wrapper input mb-2">
                                                                        <div class="d-flex justify-content-between">
                                                                            <label for="password">PASSWORD</label>
                                                                            <a href="#" hidden class="forgot-pass-link">Forgot Password?</a>
                                                                        </div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                                        <input id="password" name="password" type="password" class="form-control" placeholder="Password" required />
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                </div>

                                                                    <div class="d-sm-flex justify-content-between">
                                                                        <div class="field-wrapper">
                                                                            <button type="submit" class="btn btn-primary" value="">Log In</button>
                                                                        </div>
                                                                    </div>
                                                                    <!--<p class="signup-link">Forgot Password? <a href="#">Click Here!</a></p> -->

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
                        </div>
                    </section>
                </div>

                <div  class="example  col-lg-4 ">
                    <center>
                        <br><br>
                        <img id="km"  class="img-responsive responsive wid"  style="width:300px;"  src="img/hero/hero-right.png" alt="">
                        <button class ="btn btn-success btn-lg mt-3 scanner-btn">QR scanner</button>
                    </center>
                </div>

                <div id="z" style="display:none;" class="example  col-lg-4 ">
                    <center>
                        <br><br>
                        <img  class="img-responsive responsive wid"  style="width:300px;"  src="img/hero/hero-right.png" alt="">
                    </center>
                </div>

    
            </div>
        </div>
    <footer class="footer-section">
    <br> <br> <br> <br>
        <div class="footer__text mt-0 pt-0 ">
            <div class="cont ainer">
        
                <div class="footer__text-copyright">
                    <p style="color:white;">Copyright &copy;<script data-cfasync="false" src="js/email-decode.min.js"></script>
                    <script type="36a94c99418b4117571666db-text/javascript">document.write(new Date().getFullYear());</script>
                    All rights reserved | EzSupply Manager<i class="fa fa-heart" aria-hidden="true"></i> by <a href="#"  >Wilbon Technology</a>
                    </p>
                </div>
            </div>
        </div>
    </footer> 


 
 
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
 
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/authentication/form-2.js"></script>
 

<script>
$(".scanner-btn").on("click", function(){
  window.location.href = './qrscanner/scanner.php'
})
function displayWindowSize(){

 
 var w = window.innerWidth;
//window.alert(w);
if(w<1200)
{
//window.alert(w);
document.getElementById('km').style.display="none";
document.getElementById('z').style.display="block";
//document.getElementById("test").style.marginTop = "150px";
//document.getElementById("test2").style.marginTop = "150px";
//document.getElementById("topi").style.marginTop = "80px";
//document.getElementById("testa").style.marginTop = "10px";
//document.getElementById("testb").style.marginTop = "10px";
}
else
{
document.getElementById('z').style.display="none";
document.getElementById('km').style.display="block";
//document.getElementById("test").style.marginTop = "-80px";

}
}
// Attaching the event listener function to window's resize event
   window.addEventListener("resize", displayWindowSize);
 window.onresize = displayWindowSize;
    // Calling the function for the first time
 displayWindowSize();

</script>


<script src="js/jquery-3.3.1.min.js" type="36a94c99418b4117571666db-text/javascript"></script>
 
<script src="js/jquery.slicknav.js" type="36a94c99418b4117571666db-text/javascript"></script>
<script src="js/owl.carousel.min.js" type="36a94c99418b4117571666db-text/javascript"></script>
<script src="js/main.js" type="36a94c99418b4117571666db-text/javascript"></script>

 
<script src="js/rocket-loader.min.js" data-cf-settings="36a94c99418b4117571666db-|49" defer=""></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
 
<!-- Mirrored from colorlib.com/preview/theme/deerhost/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 09:37:31 GMT -->
</html>