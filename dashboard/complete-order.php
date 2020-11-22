<?php
include "gets_user.php";
include '../connection.php';

  $oid = $_GET['id'];

	 $sql = "SELECT * FROM order_request 
                where order_id ='$oid' and 
				order_status ='working'
				
 ";
 
 
$result = $conn->query($sql);

$i=0;


if ($result->num_rows > 0) {
 
include 'time-zone.php';
	$date = date('d,M,Y');
include 'time-zone.php';
	$time = date('h:i:sa');
	    $sql = "Update
 
		order_request
		
		set
		 
		complete_date	 = '$date' ,
		complete_time	 = '$time'	,
		order_status =  'completed' 
		where order_id ='$oid'
		
		 
          ";

  if ($conn->query($sql) === TRUE) {
 $_SESSION["scompleted"] = "d";
header("Location:my-orders-list");
 
		
	}
	 
 
}
else
{$_SESSION["completed"] = "d";
	 header("Location:my-orders-list");
// else main
}
?>