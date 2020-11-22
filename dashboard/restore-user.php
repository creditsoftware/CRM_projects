<?php
include "gets_user.php";

include '../connection.php';
  
  $user = $_GET['user'];

    	   
    
	    $sql = "update registered_users
		 set
		 is_dell	= 'no'
		 where 
		  user_id='$user'
		 ";

  if ($conn->query($sql) === TRUE) {

 
  header("Location:blocked-user-list");
 
  }
    
 

?>