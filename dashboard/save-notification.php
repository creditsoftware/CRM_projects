<?php
include "gets_user.php";
?>
<?php
include '../connection.php';
  
 
  $note =   $_POST['note'];
 
 
 
 
 
 
 $sql = "update registered_users 
                     set 
					 notif ='$note'   
 				
 ";

if ($conn->query($sql) === TRUE) {
	
	 $_SESSION["noti"] = "d";
             header("Location:home-notification");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
 
$conn->close();
?>