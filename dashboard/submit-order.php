<?php
include "gets_user.php";
include '../connection.php';
include 'time-zone.php';
	$date = date('d,M,Y');
include 'time-zone.php';
	$time = date('h:i:sa');
	    $sql = "INSERT INTO  order_request
		(order_date	, order_time ,order_by ,
		order_by_dept , join_by , join_by_dept,
		join_date , join_time	, order_status , 
		complete_date , complete_time	, cancel_req	,
		cancel_by , cancel_dept , cancel_date ,
		cancel_time)
         
         VALUES 
		 ('$date','$time','$user_id' ,
		 '$dept_name','N/A','N/A' ,
		 'N/A','N/A','start' ,
'N/A','N/A','no' ,
'N/A','N/A','N/A' ,
'N/A' 
		 )";

  if ($conn->query($sql) === TRUE) {
 
         $orderid = $conn->insert_id;
		 
		 $sql = "SELECT * FROM user_cart 
                where user_id ='$user_id'
 ";

$result = $conn->query($sql);
 $flag =0;
    while($row = $result->fetch_assoc())
	{
		$it_id= $row['it_id'];
		$need= $row['need'];
		
		// get note
		
		$sql = "SELECT * FROM items 
                where it_id ='$it_id'
 ";

$resultt = $conn->query($sql);
 $roww = $resultt->fetch_assoc();
		$not= $roww['note'];
		
		 $sql = "INSERT INTO  order_items
		(order_id	, it_id ,qty , note_old  
		 )
         
         VALUES 
		 ('$orderid','$it_id','$need' , '$not' 
		 )";
  if ($conn->query($sql) === TRUE) {
  }
  else
  {
	   $flag =1;
  }
		
		
	}
		 
   if(  $flag ==0)
   {
	   	 $sql = "Delete FROM user_cart 
                where user_id ='$user_id'
 ";
	    if ($conn->query($sql) === TRUE) {
 
	   
	   $_SESSION["order"] = "d";
   header("Location:create-order-request");
   }
   }
  }




?>