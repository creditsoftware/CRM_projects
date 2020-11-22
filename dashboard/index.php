<?php
include "gets_user.php";

?>
<!DOCTYPE html>
<html lang="en">

<?php

require 'head.php';
include '../connection.php';
				 
 $sql = "SELECT count(order_status) as neww FROM order_request where order_status ='start' 
";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$neww = $row['neww']; 
 
 if($row['neww']=="")
 {
$neww = 0; 
 	 
 } 
 
 					
 include '../connection.php';
				 
$sql = "SELECT count(order_status) as new FROM  order_request
 
where   order_status	='start' 
 
and  order_by = '$user_id' 
";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$mnew = $row['new']; 
 
 if($row['new']=="")
 {
$mnew = 0; 
 	 
 }
	 

include '../connection.php';
				 
				 
  
$sql = "SELECT count(order_status) as new FROM  order_request
 
where   order_status	='completed' 
and  order_by = '$user_id' 
or  join_by = '$user_id' and order_status	='completed' 
";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$com = $row['new']; 
 
 if($row['new']=="")
 {
$com = 0; 
 	 
 }
						
						
						
 
							
						
			include '../connection.php';
				 
 
$sql = "SELECT count(order_status) as new FROM  order_request
 
where   order_status	='canceled' 
and  order_by = '$user_id' 
or  join_by = '$user_id'  and  order_status	='canceled' 
";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$can = $row['new']; 
 
 if($row['new']=="")
 {
$can = 0; 
 	 
 }
							
						
			include '../connection.php';
				 
 
$sql = "SELECT count(order_status) as new FROM  order_request
 
where   order_status	='working' 
and  order_by = '$user_id' 
or  join_by = '$user_id'  and  order_status	='working' 
";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$wor = $row['new']; 
 
 if($row['new']=="")
 {
$wor = 0; 
 	 
 }
	
?>
<head>
        <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/forms/custom-clipboard.css" />
    <!--  END CUSTOM STYLE FILE  -->    
     <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
</head>

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
       


<?php

include 'top-header.php';


?>
		
		
		
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
<?php

include 'sidebar.php';

?>

        </div>
        <!--  END SIDEBAR  -->
          
     
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-spacing">
               <!-- Content -->
                    <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
<button id="notifi" style="display:none;" type="button" class="btn btn-secondary mb-2 mr-2" data-toggle="modal" data-target="#fadeleftModal">Testing</button>
                        <div class="user-profile layout-spacing">
                            <div class="widget-content widget-content-area">
                                <div class="d-flex justify-content-between">
                                    <h3 class="">  Info</h3>
                                    
                                    <a
                                                                      <?php
		 if($type=="admin")
		 {
         echo ' href="user_account_setting"';
		 }
		 else
		 {
		     echo 'href="#"';
		 }
		 
		 ?>
                                    class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                
                                
                                </div>
                                <div class="text-center user-info">
								
								  <img style="width:180px;"  src="assets/img/img.png" alt="avatar"> 		
								
								 
								
                                  
                                

								<p class=""><?php echo $emailaddress;?></p>
                                </div>
                                <div class="  widget-account-invoice-one"  >

                            

                            <div class="widget-content">
                                <div class="invoice-box">
                                    
                                    

                                    <div class="inv-detail">                                        
                                        <div class="info-detail-1">
                                            <p>First Name:</p>
                                            <p><?php echo $first_name; ?></p>
                                        </div>
										<div class="info-detail-1">
                                            <p>last Name:</p>
                                            <p><?php echo $last_name; ?></p>
                                        </div>
                                        <div class="info-detail-2">
                                            <p>User Name:</p>
                                              <p><?php echo $user_name; ?></p>
                                        </div>
										 
                                          
                                    </div>

                                    <div class="inv-action">
                                        <a href="change-password" class="btn btn-outline-dark">Change Password</a>
                                        <a href="lock-screen" class="btn btn-danger">Lock Screen</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                             
                            </div>
                            
                            

                        </div>

                      
                       

                    </div>

                             <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-top-spacing">
                        
                        <div class="widget widget-account-invoice-one" style="padding:20px;">

                            <div class="widget-heading">
                                <h5 class="">Orders Request Info</h5>
                            </div>

                            <div class="widget-content">
                                <div class="invoice-box">
                                    
                                   <div class="widg et widget-five" style="padding:0px;">
                            <div class="widget-content">
 
                                

                                <div class="w-content" style="padding-top:0px;padding-bottom:0px;">
                                    <div class=""> 
         <?php
		 if($type=="sale")
		 {

			 
		 ?>
			<p class="task-left"><?php echo $mnew; ?></p>
		    <p class="task-completed"><span>  My New Order</span></p>

<?php
		 }
else
{
	
	
?>	
           <p class="task-left"><?php echo $neww; ?></p>
		    <p class="task-completed"><span>  New Order Requests</span></p>
<?php }?>                                      
                                    </div>
									 <div class="widget-account-invoice-one"  >

                            
<br>
                            <div class="widget-content">
                                <div class="invoice-box">
                                    
                                    

                                    <div class="inv-detail" style="padding-top:0px;padding-bottom:0px;" >                                        
                                         
										 
										 
                                    </div>

                                    
                                </div>
                            </div>

                        </div>
                                </div>
                            </div>
                        </div>
						 

                                    <div class="inv-detail">  
                                    
                                    <?php
                                     $ty = ucwords($type);
                                     if($ty=="Sale")
                                     {
                                         $ty ="Requester";
                                     }
                                    
                                    ?>
                                        <div class="info-detail-1">
                                            <p>Department Name:</p>
                                            <p><?php echo ucwords($dept_name); ?> </p>
                                        </div>
										<div class="info-detail-1">
                                            <p>Account Type:</p>
                                            <p><?php echo ucwords($ty); ?> Rights</p>
                                        </div>
										
										
                                        <div class="info-detail-2">
                                            <p>My Completed Orders:</p>
                                     <p><?php echo $com; ?></p>
                                        </div>
										 
										 <div class="info-detail-2">
                                            <p>My Active Orders:</p>
                                <p><?php echo$wor; ?></p>
                                        </div>
										
										
										 <div class="info-detail-2">
                                            <p>My Canceled Orders:</p>
                                  <p><?php echo $can; ?></p>
									
                                        </div>
										
										
										<div class="info-detail-1">
                                            <p>Account Registration Date:</p>
                                            <p><?php echo $date; ?></p>
                                        </div>
                                        
                                    </div>

                                    <div class="inv-action">
                                         <?php
		 if($type=="admin")
		 {

		echo '                             <a href="user_account_setting" class="btn btn-outline-dark">Edit Account</a>
           ';	 
		 }
		 ?>
                                        <a href="new-order-request" class="btn btn-info">New Order Requests</a>
                                    </div>
                                </div>
                            </div>
          
                        </div>
             
                    </div>
                    
            

					 
					
					 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12  layout-top-spacing">
                        <div class="widget widget-five" style="padding:20px;">
						<div class="widget-heading">
                                <h5 class="">Track Your "Order Request"</h5>
                            </div>
                            <div class="widget-content">

                                

                                <div class="w-content">
                                     
									 <div class="widget-account-invoice-one"  >

 
                            <div class="widget-content">
                                <div class="invoice-box">
                                    
                                    

                                    <div class="inv-detail">                                        
                                         
										     <div class="clipboard">
    <form class="form-horizontal">
        
        <div class="input-group">
		 
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">#</span>
                                                    </div>
                                                   
												   <input type="text" autocomplete="off" class="form-control" name="invoice" id="oid" placeholder="eg: 00000" aria-describedby="validationTooltipUsernamePrepend" required="" />
												   <center id="oidrequired"><b>
													 <span style="color:red;display:none;"> &nbsp;
								&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Order id is required*</span>
													 </b>
													 </center>
                                                     
													
                                                </div>
												<br>
        <center>
		
		<span id="real" onclick="track()" class="btn btn-primary"  >
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
		Track Order</span>
     <span id="fake" style="cursor:not-allowed;display:none;" class="btn btn-danger bs-tooltip mt-2"   title="Please Wait for Response"   >
	   Please Wait...!
	  </span>
 </center>
    </form>
</div> 

										 
                                    </div>
									

                                    <p id="order_id_div" style="display:none;" class="task-completed"><span>   Order Request #<span id="idd_div">xxx</span></span></p>
                                   
								   
                                </div>
							
                            </div>

                        </div>
						
                                </div>
								
								<p id="1" style="display:none;" class="task-co mpleted">
								<span> 
								<b>  1)Your Order Has Started:</b></span><br>
								  <center style="display:none;" id="1inner" ><u>7-Jul-2020 , 1:00pm<u/></center>
									 
									 </p>
                                   
								   <p id="2" style="display:none;" class="task-co mpleted"><span> 
								   <b>  2)Supply Agent Working Order Request:</b></span>
									<center style="display:none;" id="2inner"><u>XXX Join Order on 7-Jul-2020, 3:00pm</u></center></p>
                                   

								   <p id="3"  style="display:none;" class="task-co mpleted"><span>  
								   <b>  3)Order Ready For Shipping / Pickup:</b></span>
									<center style="display:none;" id="3inner" ><u>7-Jul-2020, 1:30pm</u></center></p>
									
									 <p id="4"  style="display:none;" class="task-co mpleted"><span>  
								   <b>  4)Canceled Date and Time:</b></span>
									<center style="display:none;" id="4inner" ><u>7-Jul-2020, 1:30pm</u></center></p>
                            
	  <p id="status_div" style="display:none;color:green;" class="task-completed">
	  <center><b>
	  <span > <span id="status_before"> Order Result </span><u><span id="status_inner"></span></u></span>
	</b> </center> 
	  </p>
                                   		
							</div>
                        </div>

                    </div>
					
					<script>
					
					function track()
					{
						document.getElementById('status_inner').innerHTML="";
						document.getElementById('status_before').innerHTML="Order Result";
						document.getElementById('oidrequired').style.display="none";
						document.getElementById('order_id_div').style.display="none";
						document.getElementById('status_div').style.display="none";
						document.getElementById('1').style.display="none";
						document.getElementById('2').style.display="none";
						document.getElementById('3').style.display="none";
						document.getElementById('4').style.display="none";
						document.getElementById('4inner').style.display="none";
						document.getElementById('3inner').style.display="none";
						document.getElementById('2inner').style.display="none";
						document.getElementById('1inner').style.display="none";
						
                       
						document.getElementById('real').style.display="none";
                        document.getElementById('fake').style.display="block";
                        var oid = document.getElementById('oid').value;
					    var numbers = /^[0-9]+$/;
											  if(oid.match(numbers))
											 {
												 
											check_order(oid);	 
											 
											 }
											 else
											 {
						swal("Invalid Order Id!", "You Entered Invalid Order Id!", "warning");
							document.getElementById('real').style.display="block";
                            document.getElementById('fake').style.display="none";
											 }
                   	
						
					}
					
					
					function check_order(oid){
 				        var user = {         
                            oid: oid  
       
                        };
			
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "check_order.php", true);
        xmlhttp.setRequestHeader('Content-type','application/json; charset=utf-8'); //declare that you are sending json data
        var studentData = JSON.stringify(user); //convert your json object into json string to be passed on
        xmlhttp.send(studentData);     //it should be converted intro string before passing
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText=="no")
				{				
			 swal("No Order Record!", "No Order Record found by this order id!", "warning");
			  document.getElementById('real').style.display="block";
			 document.getElementById('fake').style.display="none";
											
		 
				} 
				else
				{
					 var record = Array();
				record = JSON.parse(this.responseText);
				 show(record);
			 
				}
                 
            }
        };
}

 function show(record) {
	 
	
	 
	 document.getElementById('idd_div').innerHTML=record[0].order_id;
	 document.getElementById('order_id_div').style.display="block";
	    
	 if(record[0].order_status=="start")
	 {
	document.getElementById('1inner').innerHTML=record[0].order_date + " , "+record[0].order_time;	 
	document.getElementById('1').style.display="block";	 
	document.getElementById('1inner').style.display="block"; 
		
   document.getElementById('status_before').innerHTML="Status: ";
 document.getElementById('status_inner').innerHTML="<span style='color:blue;'> Not Join By Any One Yet!</span>";
		
	 }
 if(record[0].order_status=="working")
	 {
	document.getElementById('1inner').innerHTML=record[0].order_date + " , "+record[0].order_time;	 
	document.getElementById('1').style.display="block";	 
	document.getElementById('1inner').style.display="block"; 
		 
 document.getElementById('2inner').innerHTML=record[0].join_date + " , "+record[0].join_time;	 
	document.getElementById('2').style.display="block";	 
	document.getElementById('2inner').style.display="block";		 
	   document.getElementById('status_before').innerHTML="Status: ";
 document.getElementById('status_inner').innerHTML="<span style='color:green;'> Working</span>";	 
	 }
 if(record[0].order_status=="completed")
	 {
		 document.getElementById('1inner').innerHTML=record[0].order_date + " , "+record[0].order_time;	 
	document.getElementById('1').style.display="block";	 
	document.getElementById('1inner').style.display="block";
	
 document.getElementById('2inner').innerHTML=record[0].join_date + " , "+record[0].join_time;	 
	document.getElementById('2').style.display="block";	 
	document.getElementById('2inner').style.display="block";
	
	 document.getElementById('3inner').innerHTML=record[0].complete_date + " , "+record[0].complete_time;	 
	document.getElementById('3').style.display="block";	 
	document.getElementById('3inner').style.display="block";	
	
	 document.getElementById('status_before').innerHTML="Status: ";
 document.getElementById('status_inner').innerHTML="<span style='color:green;'> Completed</span>";	 
		
		 
	 }
 if(record[0].order_status=="canceled")
	 {
		 
	document.getElementById('1inner').innerHTML=record[0].order_date + " , "+record[0].order_time;	 
	document.getElementById('1').style.display="block";	 
	document.getElementById('1inner').style.display="block"; 

document.getElementById('4inner').innerHTML=record[0].cancel_date + " , "+record[0].cancel_time;	 
	document.getElementById('4').style.display="block";	 
	document.getElementById('4inner').style.display="block"; 


	
	 document.getElementById('status_before').innerHTML="Status: ";
 document.getElementById('status_inner').innerHTML="<span style='color:red;'> Canceled</span>";		 
	 }
		
		
         document.getElementById('status_div').style.display="block";
         document.getElementById('real').style.display="block";
			 document.getElementById('fake').style.display="none";
    }											
											
					
					
					</script>
  
  
 
                </div>
                </div>

            <?php
			
			require 'footer_inner.php';
			
			?>
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

   <?php 
   
   require 'footer.php';
   
   ?>
  
<!--  BEGIN CUSTOM SCRIPT FILE  -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script>
        $('#yt-video-link').click(function () {
            var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
            $('#videoMedia1').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia1 .video-container');
        });
        $('#vimeo-video-link').click(function () {
            var src = 'https://player.vimeo.com/video/1084537';
            $('#videoMedia2').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia2 .video-container');
        });
        $('#videoMedia1 button, #videoMedia2 button').click(function () {
            $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
        });
    </script>    
    <!--  END CUSTOM SCRIPT FILE  -->
    
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo5/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:06:38 GMT -->
</html>