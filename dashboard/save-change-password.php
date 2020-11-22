<?php
include "gets_user.php";
?>
<?php
include '../connection.php';
$password = $_GET['password'];
 
 
 
 $sql = "update registered_users 
                     set 
				  
					 password ='$password' 
					 
			 
					where 
					user_id ='$user_id'
					
					
 ";

if ($conn->query($sql) === TRUE) {
	
             header("Location:logout");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
 
$conn->close();
?>