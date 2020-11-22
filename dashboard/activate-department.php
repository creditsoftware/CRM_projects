<?php
include "gets_user.php";

include '../connection.php';
  
  $dept = $_GET['dept'];

    	   
    
	    $sql = "update department
		 set
		 is_dell	= 'no'
		 where 
		  dept_id='$dept'
		 ";

  if ($conn->query($sql) === TRUE) {

 
  header("Location:deactivated-departments");
 
  }
    
 

?>