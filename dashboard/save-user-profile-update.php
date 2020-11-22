<?php
include "gets_user.php";
?>
<?php
include '../connection.php';
  
  $first =  ucfirst($_POST['first']);
  $last =  ucfirst($_POST['last']);
 
 
 
 
 
 
 $sql = "update registered_users 
                     set 
					 first_name ='$first' , 
					 last_name ='$last'   
 
				 
 				  
				 
					   
					where 
					user_id ='$user_id'
					
					
 ";

if ($conn->query($sql) === TRUE) {
	
             header("Location:user_account_setting");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
 
$conn->close();
?>