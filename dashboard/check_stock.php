<?php
include "gets_user.php";
?>
<?php

include '../connection.php';

// get JSON data
$data = file_get_contents("php://input");
//convert json data to array
$json_data = json_decode($data, true);

  $get_quan=0;
  $pid = $json_data['pid'];
  $quan = $json_data['quan'];
 
 $sql = "SELECT * FROM  items where it_id	='$pid' ";
$result = $conn->query($sql);
    
if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
   $get_quan =  $row['count'];
   if($quan > $get_quan )
   {
	  echo "big"; 
	   
   }
   else
   {
	    $sql = "SELECT * FROM  user_cart where it_id  ='$pid'
		and user_id='$user_id'
		";
$result = $conn->query($sql);
    
if ($result->num_rows > 0) {
      
      echo "alerady";	  
	  
   }
   else
   {
	   $new = $get_quan -  $quan;
	   // subtract 
	   
	   $sql = "Update 
		 items
		set
	    count  ='$new'
     	  where 
		 it_id = '$pid'
		 
		 ";

  if ($conn->query($sql) === TRUE) {
	    
		// add to cart 
		
 $sql = "INSERT into  user_cart
    (user_id , it_id , need)
	values
	('$user_id', '$pid', '$quan')
		 ";

  if ($conn->query($sql) === TRUE) {
	  
	  echo "added";
	  
  }
  }
	  
	  
  }
	   
	   
	   
	 
	   
	   
   }

   

}
else
{
	echo "no";
}
 
 
 
$conn->close();
?>