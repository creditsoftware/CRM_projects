<?php
include "gets_user.php";
include '../connection.php';

  $oid = $_GET['oid'];

	 $sql = "SELECT * FROM order_request 
                where order_id ='$oid' and 
				order_status ='working'
				
 ";
 
$result = $conn->query($sql);
 

if ($result->num_rows > 0) {
	
 
	    $sql = "Update
 
		order_request
		
		set
 
		cancel_req = 'yes',
		cancel_by = '$user_id',
		cancel_dept ='$dept_name'
		
		where order_id ='$oid'
		
		 
          ";

  if ($conn->query($sql) === TRUE) {
 $_SESSION["send_req"] = "d";
header("Location:my-orders-status");
 
		
	}
	 
 
 
 
 
 
 
 
}
else
{ 
	header("Location:my-orders-status");
// else main
}
?>