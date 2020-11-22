<?php
include "gets_user.php";
include '../connection.php';

  $oid = $_GET['oid'];

	 $sql = "SELECT * FROM order_request 
                where order_id ='$oid' and 
				cancel_req ='yes'
				
 ";
 
$result = $conn->query($sql);
 

if ($result->num_rows > 0) {
	
 
	    $sql = "Update
 
		order_request
		
		set
 
		cancel_req = 'no'
	 
		
		where order_id ='$oid'
		
		 
          ";

  if ($conn->query($sql) === TRUE) {
 
header("Location:my-orders-list");
 
		
	}
	 
 
 
 
 
 
 
 
}
else
{ 
	header("Location:my-orders-list");
// else main
}
?>