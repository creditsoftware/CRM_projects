<?php
include "gets_user.php";
?>
<?php

include '../connection.php';
 
  $item = $_GET['item'];
 
 $sql = "SELECT * FROM  user_cart where cart_id  ='$item'
	 ";		
$result = $conn->query($sql);
$row = $result->fetch_assoc();
   $it_id =  $row['it_id'];
   $need =  $row['need'];
   
 
  $sql = "SELECT * FROM  items where it_id  ='$it_id'
	 ";		
$result = $conn->query($sql);
$row = $result->fetch_assoc();
   $count =  $row['count'];
   
   $new = $count + $need;
 
 
		
 $sql = "Update items   
    
	set 
  count = '$new'
    where 
	it_id  ='$it_id'
	
		 ";

  if ($conn->query($sql) === TRUE) {
	  
$sql = "Delete  from user_cart   
    
	 
   where cart_id  ='$item'
	
		 ";
		 if ($conn->query($sql) === TRUE) {

header ("Location:create-order-request");		 
		
		 }

	  
 
  }
 
?>