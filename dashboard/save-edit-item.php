<?php

include "gets_user.php";
include '../connection.php';
 	$name = ucwords(strtolower(trim($_POST['name'])));
   	$quan = $_POST['quan'];
	$note = $_POST['note'];
	$barco = $_POST['barco'];   
	$location = $_POST['location'];
   	$id = $_GET['item'];
	
	$sql = "SELECT * FROM items where it_name='$name' and it_id !='$id'";
   	$result = $conn->query($sql);
	if ($result->num_rows > 0)  
 	{
		$_SESSION["error_item"] = "d";
	  	header("Location:edit-item?ref=".$id);	
	}
	else
	{
	    $sql = "Update items set it_name ='$name', note='$note', count  ='$quan',barco = '$barco', location = '$location' where it_id = '$id'";
  		if ($conn->query($sql) === TRUE) {
 			$_SESSION["savee_item"] = "d";
	  		header("Location:update-items");	
 		}
	}



?>