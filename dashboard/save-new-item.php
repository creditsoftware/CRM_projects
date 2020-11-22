<?php
include "gets_user.php";

include '../connection.php';

	$name = ucwords(strtolower(trim($_POST['name'])));
	$quan = $_POST['quan'];
	$note = $_POST['note'];
	$barco = $_POST['barco'];
	$qr_url = $_POST["qr_url"];
	$location = $_POST["location"];
	
    $sql = "SELECT * FROM items where it_name='$name' ";
   	$result = $conn->query($sql);
    
	if ($result->num_rows > 0)  
 	{
 
		
		$_SESSION["error_item"] = "d";
		$_SESSION["name"] = $name;
		$_SESSION["quan"] = $quan;
		$_SESSION["note"] = $note;
		 
	  header("Location:add-new-item");	
	}
	else
	{
   
include 'time-zone.php';
	$date = date('d,M,Y');
include 'time-zone.php';
	$time = date('h:i:sa');
	    $sql = "INSERT INTO  items
		(it_name, it_type ,note ,  is_dell
         , date	, time , count , barco , location,  qr_data )
                                 	
         VALUES ('$name','nop','$note' ,
		 'no','$date','$time' ,
		 '$quan' ,
		 '$barco',
		 '$location',
		 '$qr_url'
		 )";

  if ($conn->query($sql) === TRUE) {
  
 $_SESSION["new_item"] = "d";
	  header("Location:add-new-item");	
 
 
  }
  
  
 
	}
	
		
 
  

?>