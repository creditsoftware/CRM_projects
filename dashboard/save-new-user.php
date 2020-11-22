<?php 
include "gets_user.php";

include '../connection.php';

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
    
    $sql = "SELECT * FROM registered_users where emailaddress='$email' ";
   $result = $conn->query($sql);
    
	if ($result->num_rows > 0)  
 	{
		$_SESSION["email_e"] = "d";
		$_SESSION["fname"] = $fname;
		$_SESSION["lname"] = $lname;
		$_SESSION["username"] = $username;
		$_SESSION["dept"] = $dept;
		$_SESSION["email"] = $email;
		$_SESSION["password"] = $password;
		
		  header("Location:add-new-user");	
	}
	else
	{
		
		    $sql = "SELECT * FROM registered_users where user_name='$username' ";
   $result = $conn->query($sql);
		if ($result->num_rows > 0)  
  
		{
		$_SESSION["username_e"] = "d";
			$_SESSION["fname"] = $fname;
			$_SESSION["lname"] = $lname;
		$_SESSION["username"] = $username;
		$_SESSION["dept"] = $dept;
		$_SESSION["email"] = $email;
		$_SESSION["password"] = $password;
		  header("Location:add-new-user");	
		}
	 
		else
		{
    
include 'time-zone.php';
	$date = date('d,M,Y');
include 'time-zone.php';
	$time = date('h:i:sa');
	    $sql = "INSERT INTO  registered_users
		(first_name, last_name ,user_name ,  emailaddress
         , password	, dept , user_type, gender , 
	         is_dell , date , time	)
         VALUES ('$fname','$lname','$username' ,
		 '$email','$password','$dept' ,
		 'user','male','no' ,
		 '$date','$time' 
		 )";

  if ($conn->query($sql) === TRUE) {

          
 $_SESSION["new_user"] = "d";
	  header("Location:add-new-user");	
 
  }
   }
  
	}
	}
	else
	{
		
		 $_SESSION["invalid_dept"] = "d";
		 	$_SESSION["fname"] = $fname;
			$_SESSION["lname"] = $lname;
		$_SESSION["username"] = $username;
		$_SESSION["dept"] = $dept;
		$_SESSION["email"] = $email;
		$_SESSION["password"] = $password;
	  header("Location:add-new-user");	
		
	}
  

?>