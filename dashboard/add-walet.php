<?php
include "gets_user.php";
?>
<?php
if(isset($_SESSION['ads']))
{
unset($_SESSION['ads']);
include '../connection.php';
$rs =0;
$sql = "SELECT * FROM invoice where user_id='$user_id' and is_active='yes'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
$row = $result->fetch_assoc();
 
$pkg_id   = $row['pkg_id'];
$sql = "SELECT * FROM packeges_plan
where pkg_id='$pkg_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
$rs = $row['per_click_earn'];
  
	 
}



// add to wallet

date_default_timezone_set("Asia/Karachi");
	$date = date('d-M-Y');
	
	date_default_timezone_set("Asia/Karachi");
	$time = date('h:i:sa');
	    $sql = "INSERT INTO  transcation
		(userid, deposit ,withdraw	 ,  type , Date	, time, pic)
         VALUES ('$user_id','$rs','0','deposit','$date','$time','N/A')";

 
	if ($conn->query($sql) === TRUE) {
	 
	    header("Location:index");
	 }
	 else
	 {
	     echo $conn->error;
	 }
 }
 else
 { header("Location:index");
	 
 }


?>