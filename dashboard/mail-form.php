<?php
include "gets_user.php";
require "PHPMailer/PHPMailerAutoload.php";

// get JSON data
$data = file_get_contents("php://input");
//convert json data to array
$json_data = json_decode($data, true);

  $orderid = $_GET['order-id'];
  $experience = $_POST['experience'];
  $comments = $_POST['comments'];
  
  include '../connection.php';
 									 

 
 $sql = "SELECT * FROM order_request 
 inner join registered_users on registered_users.user_id =  order_request.join_by
 
 where order_request.order_id='$orderid' 
 ";
$result = $conn->query($sql);
 
    $row = $result->fetch_assoc();
     
     $user_name	  =$row['user_name'];
     $emailaddress =$row['emailaddress'];
   
 

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.ezsupplymanager.com';
        $mail->Port = '465';  
        $mail->Username = 'survey@ezsupplymanager.com';
        $mail->Password = 'odgx6!YxP[MW';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="survey@ezsupplymanager.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
             include '../connection.php';
          $orderid = $_GET['order-id'];  
	 		 $sql = "Update
 
		order_request
		
		set
 
		feedback = 'yes'
		 
		where order_id ='$orderid'
		
		 
          ";

  if ($conn->query($sql) === TRUE) {
 $_SESSION["email"] = "d";
header("Location:my-orders-status");
$error = "Thank You !! Your email is sent.";  
            return $error;
		
	}
	 
			
            
        }
    }
    
    $to   = 'survey@ezsupplymanager.com';
    $from = 'survey@ezsupplymanager.com';
    $name = 'EzSupplyManager';
    $subj = 'Order Completion Survey | EzSupplyManager | Order #'.$orderid;
    $msg = '<html>
    <head>
        <title>Order Request | Service Feedback</title>
    </head>
    From: <a href="http://ezsupplymanager.com">Ezsupplymanager.com</a>
    <body style="padding:70px;">
         <h2 >
        <b>Order Request | Service Feedback</b>
        </h2>
        <h4 style="color: ;"><b>
        Order #'.$orderid.'<br>
		Assign Agent:'.$user_name.'<br>
		Email Address:'.$emailaddress.'<br>
        </b></h4>
           <p>		
               <b><u>Feedback Rate</u></b>: '.$experience.' <br>
			   <b><u>Comment:</u></b> '.$comments.' <br>

                  </p>		
    </body>
    
</html>';
    
 echo   smtpmailer($to,$from, $name ,$subj, $msg);
    
?>

