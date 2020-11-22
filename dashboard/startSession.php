<?php

session_start();

 

$_SESSION["user_email"] = $_GET['email'];

$_SESSION["user_pass"] = $_GET['pass'];

  

 header('Location:index');

 

?>



 