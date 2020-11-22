<?php
include "gets_user.php";
include '../connection.php';

  $oid = $_GET['id'];

	 $sql = "SELECT * FROM order_request 
                where order_id ='$oid' and 
				order_status ='start'
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
		 join_by = '$user_id' ,
		 join_by_dept = '$dept_name'   ,
		join_date = '$date' ,
		join_time = '$time'	,
		order_status =  'working' 
		where order_id ='$oid'
		
		 
          ";

  if ($conn->query($sql) === TRUE) {
 $_SESSION["sjoined"] = "d";
  header("Location:new-order-request");
 
		
	}
	 
 
}
else
{$_SESSION["joined"] = "d";
	 header("Location:new-order-request");
// else main
}
?>