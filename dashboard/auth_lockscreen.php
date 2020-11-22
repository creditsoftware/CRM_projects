<?php

session_start();

if(isset($_SESSION['user_email']))

 {}

 else

 {

	 header("Location:login");

 }

 

include '../connection.php';

 									 



$email = $_SESSION['user_email'];



 $sql = "SELECT * FROM registered_users where emailaddress='$email'";



$result = $conn->query($sql);

 

    $row = $result->fetch_assoc();


     $first_name   =$row['first_name'];

     $user_id   =$row['user_id'];

     $last_name   =$row['last_name'];

	 $user_name	=$row['user_name'];

	 $emailaddress=$row['emailaddress'];

	 $password=$row['password'];

	 $dept	 = $row['dept'];

	 $user_type=$row['user_type'];

	 $gender=$row['gender'];

	 

	 $date=$row['date'];

	 $forget=$row['forget'];

	 $is_dell=$row['is_dell'];

	 $time=$row['time'];

  if ($_SERVER["REQUEST_METHOD"] == "POST")

					{

					 $password2 =  $_POST['password'];

					 if($password == $password2)

					 {

						 

 header("Location:startSession.php?email=".$emailaddress."&pass=".$password);

					 }

					}

	 

  

?>

<!DOCTYPE html>

<html lang="en">



<!-- Mirrored from designreset.com/cork/ltr/demo5/auth_lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:07:19 GMT -->

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title>Lock Screen - EzSupplyManager</title>

    <link rel="icon" type="image/x-icon" href="../fav.png"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />

    <!-- END GLOBAL MANDATORY STYLES -->

    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">

    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">

</head>

<body class="form">

    



    <div class="form-container">

        <div class="form-form">

            <div class="form-form-wrap">

                <div class="form-container">

                    <div class="form-content">



                        <div class="d-flex user-meta">

                            <img src="assets/img/un.jpg" class="usr-profile" alt="avatar">

                            <div class="">

                                <p class=""><?php echo $user_name; ?></p>

                            </div>

                        </div>



                         <form class="text-left" method="POST" autocomplete="off">

                       

                            <div class="form">

        <?php

					if ($_SERVER["REQUEST_METHOD"] == "POST")

					{

											 $password2 =  $_POST['password'];

					 if($password != $password2)

					 {

					 

						echo '  <span style="background-color:#F8D7DA; padding:20px;">

	 <b  >You Entered Invalid ! username or password</b> </span> 

	 <br>

	 <br>

						 ';

						 

					}}

					 

					

					?>  						

                                <div id="password-field" class="field-wrapper input mb-2">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>

                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">

                                </div>

                                <div class="d-sm-flex justify-content-between">

                                    <div class="field-wrapper toggle-pass">

                                        <p class="d-inline-block">Show Password</p>

                                        <label class="switch s-primary">

                                            <input type="checkbox" id="toggle-password" class="d-none">

                                            <span class="slider round"></span>

                                        </label>

                                    </div>

                                    <div class="field-wrapper">

                                        <button type="submit" class="btn btn-primary" value="">Unlock</button>

                                    </div>

                             

                                </div>



                            </div>

                        </form>   



                        <p class="terms-conditions">© 2020 All Rights Reserved. <a href="../index">EzSupplyManager</a> is a product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>



                    </div>                    

                </div>

            </div>

        </div>

        <div class="form-image">

            <div class="l-image">

            </div>

        </div>

    </div>



    

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>

    <script src="bootstrap/js/popper.min.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>

    

    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="assets/js/authentication/form-1.js"></script>

 

	

</body>



<!-- Mirrored from designreset.com/cork/ltr/demo5/auth_lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:07:38 GMT -->

</html>