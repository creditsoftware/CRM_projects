<?php
include "gets_user.php";

include '../connection.php';
  $Name = ucwords(strtolower(trim($_POST['Name'])));
  $Permission = $_POST['Permission'];

    	   
    
    $sql = "SELECT * FROM department where dept_name='$Name' ";
   $result = $conn->query($sql);
    
	if ($result->num_rows > 0)  
 	{
		$_SESSION["dept_name"] = "d";
		  header("Location:add-new-department");
	}
	else
	{
    
include 'time-zone.php';
	$date = date('d,M,Y');
	    $sql = "INSERT INTO  department
		(dept_name, type ,dept_date ,  is_dell  )
         VALUES ('$Name','$Permission','$date','no' )";

  if ($conn->query($sql) === TRUE) {

          
 $_SESSION["dept_Add"] = "d";
  header("Location:add-new-department");
 
  }
   }
   
 

?>