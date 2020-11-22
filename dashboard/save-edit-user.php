<?php
include "gets_user.php";

include '../connection.php';
   
   
    $id=$_GET['id'];
  $fname = ucwords(strtolower(trim($_POST['fname'])));
   $lname = ucwords(strtolower(trim($_POST['lname'])));
   $username = strtolower($_POST['username']);
   $dept = $_POST['dept'];
   $email = strtolower($_POST['email']);
   $password = $_POST['password'];

     $sql = "SELECT * FROM department where dept_id='$dept' ";
   $result = $conn->query($sql);
    
	if ($result->num_rows > 0)  
 	{ 	   
    
    $sql = "SELECT * FROM registered_users where emailaddress='$email'
    and user_id !='$id'
	";
   $result = $conn->query($sql);
    
	if ($result->num_rows > 0)  
 	{
		$_SESSION["email_e"] = "d";
		 
		 header("Location:edit-user?ref=".$id);	
	}
	else
	{
		
		    $sql = "SELECT * FROM registered_users where user_name='$username'
and user_id !='$id'
	";
   $result = $conn->query($sql);
		if ($result->num_rows > 0)  
  
		{
		$_SESSION["username_e"] = "d";
		 
		 header("Location:edit-user?ref=".$id);	
		}
	 
		else
		{
    
include 'time-zone.php';
	$date = date('d,M,Y');
include 'time-zone.php';
	$time = date('h:i:sa');
	    $sql = "Update   
		registered_users
		set
		first_name='$fname'  ,
		last_name= '$lname' ,
		user_name= '$username',
		emailaddress='$email'
         , password='$password'	
		 , dept='$dept' 
		where 
		user_id = '$id'
		
		";

  if ($conn->query($sql) === TRUE) {

          
 $_SESSION["edit_user"] = "d";
	  header("Location:update-users");	
 
  }
   }
  
	}
	}
	else
	{
		
		 $_SESSION["invalid_dept"] = "d";
		 	 
	  header("Location:edit-user?ref=".$id);	
		
	}
  

?>