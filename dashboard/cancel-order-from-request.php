<?php
include "gets_user.php";
include '../connection.php';

  $oid = $_GET['oid'];

	 $sql = "SELECT * FROM order_request 
                where order_id ='$oid' and 
				order_status ='working'
				and 
				cancel_req='yes'
				
 ";
 
 
$result = $conn->query($sql);
 

if ($result->num_rows > 0) {
	
	
	$sql = "SELECT * FROM order_items 
                where order_id ='$oid'
 ";

$resultt = $conn->query($sql);
	
	 while($roww = $resultt->fetch_assoc())
	{
		$it_id = $roww['it_id'];
		$qty = $roww['qty'];
		
$sqll = "SELECT * FROM items where it_id ='$it_id' ";
$r = $conn->query($sqll);
$item = $r->fetch_assoc();
$now = $item['count']; 

$new = $qty + $now;
$sqll = "Update items set count	='$new' where it_id ='$it_id' ";
if ($conn->query($sqll) === TRUE) {
	
	
}
 		
		
	}
	
	
	
 
include 'time-zone.php';
	$date = date('d,M,Y');
include 'time-zone.php';
	$time = date('h:i:sa');
	    $sql = "Update
 
		order_request
		
		set
		 
		 
	 
		cancel_date	 = '$date'	,
		cancel_time		 = '$time'	,
		order_status =  'canceled' 
		where order_id ='$oid'
		
		 
          ";

  if ($conn->query($sql) === TRUE) {
 $_SESSION["sCanceled"] = "d";
header("Location:my-orders-list");
 
		
	}
	 
 
 
 
 
 
 
 
}
else
{$_SESSION["canceled"] = "d";
	 header("Location:my-orders-list");
// else main
}
?>