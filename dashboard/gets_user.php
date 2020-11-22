<?php

session_start();



if(isset($_SESSION['user_email']))

 {}
 else
 {
	 header("Location:../home");
 }
 if(isset($_SESSION['user_pass']))
 {
 }
 else

 {

	 header("Location:auth_lockscreen");

 }

 

include '../connection.php';

$email = strtolower($_SESSION['user_email']);



 $sql = "SELECT * FROM registered_users 

 inner join department on department.dept_id =  registered_users.dept

 where

 registered_users.emailaddress='$email' 

 or

 registered_users.user_name='$email' 

 

 ";

$result = $conn->query($sql);

    $row = $result->fetch_assoc();
     $first_name   =$row['first_name'];
     $user_id   =$row['user_id'];
     $last_name   =$row['last_name'];
	 $user_name	=$row['user_name'];
	 $emailaddress=$row['emailaddress'];
	 $password=$row['password'];

	  $dept	 = $row['dept'];

	 $user_type=$row['user_type'];

	 $gender=$row['gender'];

	 

	 $date=$row['date'];

	 $forget=$row['forget'];

	 $is_dell=$row['is_dell'];

	 $time=$row['time'];

	  

	 $dept_name=$row['dept_name'];

	 $type=$row['type'];

	 $notif=$row['notif'];

	 

	 							 

			 

?>