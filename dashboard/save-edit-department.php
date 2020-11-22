<?php
include "gets_user.php";

include '../connection.php';
  $Name = ucwords(strtolower(trim($_POST['Name'])));
  $Permission = $_POST['Permission'];
  $id = $_GET['id'];

    	   
    
    $sql = "SELECT * FROM department
	where dept_name='$Name' and type='$Permission' ";
   $result = $conn->query($sql);
    
	if ($result->num_rows > 0)  
 	{
		$_SESSION["dept_name_edit"] = "d";
		  header("Location:view-departments");
	}
	else
	{
    
include 'time-zone.php';
	$date = date('d,M,Y');
	    $sql = "Update  department
		set
		dept_name ='$Name',
		type = '$Permission',
		dept_date= '$date'
		where 
		dept_id = '$id'
		
		";

  if ($conn->query($sql) === TRUE) {

          
 $_SESSION["edit_dept"] = "d";
  header("Location:view-departments");
 
  }
   }
   
 

?>