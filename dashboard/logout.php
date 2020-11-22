<?php
session_start();
unset($_SESSION['user_email']);
unset($_SESSION['user_pass']);
 session_unset();

 session_destroy();
  header('Location:../home');
 

?>