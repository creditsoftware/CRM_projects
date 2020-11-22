<?php
session_start();
unset($_SESSION['user_pass']);
header('Location:index');
 

?>