<?php
include "gets_user.php";
?>
<?php

include '../connection.php';

// get JSON data
$data = file_get_contents("php://input");
//convert json data to array
$json_data = json_decode($data, true);

  
  $oid = $json_data['oid'];
  
 
 $sql = "SELECT * FROM  order_request where order_id	='$oid' ";
$result = $conn->query($sql);
    
if ($result->num_rows > 0) { 
 
 $result_array = Array();
    while($row = $result->fetch_assoc()) {
        $result_array[] = $row;
    }
   $json_array = json_encode($result_array);
   echo $json_array;
 


}
else
{
	echo "no";
}
 
 
 
?>