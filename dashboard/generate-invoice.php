<?php

include "gets_user.php";
include '../connection.php';
    $id = $_GET['id'];
	
	 date_default_timezone_set("Asia/Karachi");
	$date = date('d-M-Y');
 $sql = "
  
  INSERT into invoice (user_id , invoice_date ,pkg_id	,is_active	, active_date	 )
  VALUES('$user_id','$date','$id','no','no')
					
 ";

if ($conn->query($sql) === TRUE) {
	
          header("Location:apps_invoice");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
 
$conn->close();


?>