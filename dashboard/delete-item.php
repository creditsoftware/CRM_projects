<?php
include "gets_user.php";

include '../connection.php';
  
  $item = $_GET['item'];

    	   
    
	    $sql = "update items
		 set
		 is_dell	= 'yes'
		 where 
		  it_id='$item'
		 ";

  if ($conn->query($sql) === TRUE) {

 
  header("Location:update-items");
 
  }
    
 

?>