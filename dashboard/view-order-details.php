<?php
include "gets_user.php";
if($type=="admin" ||$type=="supply"  )
{
}
else
{
	header("Location:index");
}
?>
<!DOCTYPE html>
<html lang="en">

<?php

require 'head.php';

?>
<head>
   
 <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/elements/miscellaneous.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/breadcrumb.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="plugins/drag-and-drop/dragula/dragula.css" rel="stylesheet" type="text/css" />
    <link href="plugins/drag-and-drop/dragula/example.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->    
    
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="sidebar-noneoverflow">
    
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
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
                            <?php

include 'sidebar.php';

?>

        </div>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row" id="cancel-row">
                    <div class="col-lg-12 layout-spacing layout-top-spacing">
                        <div class="statbox widget box box-shadow">
                            
                            <div class="widget-content widget-content-area">

                                <div class='parent ex-1'>
                                    <div class="row">

                                        <div class="col-sm-6">
                                           <form  autocomplete="off" method="POST" class="needs-validation" novalidate   enctype="multipart/form-data">
                                        <div class="form-row">
                                            
                                            
                                            <div class="col-md-8  ">
                                                
 <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
									<nav class="breadcrumb-two" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index" >Home</a></li>
        <li class="breadcrumb-item active"><a href="my-orders-list" >My Orders</a></li>
        <li class="breadcrumb-item" aria-current="page"><a >Detail</a></li>
    </ol>
</nav>
                 <h4 style="color:green;"><b>Order Request #<?php  echo $order_id = $_GET['order-id'];	?></b></h4>
                                    </div>           
                                </div>
								<?php
								include '../connection.php';
 									 

$order_id = $_GET['order-id'];

 $sql = "SELECT * FROM order_request 
 inner join registered_users on registered_users.user_id =  order_request.order_by
 
 where order_request.order_id='$order_id' 
 ";
$result = $conn->query($sql);
 
    $row = $result->fetch_assoc();
     
     $user_name	  =$row['first_name']." ".$row['last_name'];;
     $emailaddress =$row['emailaddress'];

	 
   $order_date	 =$row['order_date'];
   $order_time  =$row['order_time'];
   $order_by_dept =$row['order_by_dept'];
 
   $join_by	 =$row['join_by'];
   
   
   $join_by_dept  =$row['join_by_dept'];
   $join_date =$row['join_date'];
   $join_time  =$row['join_time'];
   $order_status =$row['order_status'];
   $complete_date =$row['complete_date'];
   $complete_time	 =$row['complete_time'];
   $cancel_by =$row['cancel_by'];
   $cancel_dept	 =$row['cancel_dept'];
   $cancel_date	  =$row['cancel_date'];
   $cancel_time	=$row['cancel_time'];
   
   
   $sql = "SELECT * FROM order_request 
 inner join registered_users on registered_users.user_id =  order_request.cancel_by
 
 where order_request.order_id='$order_id' 
 ";
$result = $conn->query($sql);
 
    $row = $result->fetch_assoc();
     
     $cancel_name	  =$row['first_name']." ".$row['last_name'];;
     $cancel_email =$row['emailaddress'];
    
	if($cancel_name =="")
	{
		$cancel_name ="N/A";
	}if($cancel_email =="")
	{
		$cancel_email ="N/A";
	}
 
 
 $sql = "SELECT * FROM order_request 
 inner join registered_users on registered_users.user_id =  order_request.join_by
 
 where order_request.order_id='$order_id' 
 ";
$result = $conn->query($sql);
 
    $row = $result->fetch_assoc();
     
     $join_user_name	  =$row['first_name']." ".$row['last_name'];
     $join_emailaddress =$row['emailaddress'];
    
	if($join_user_name =="")
	{
		$join_user_name ="N/A";
	}if($join_emailaddress =="")
	{
		$join_emailaddress ="N/A";
	}
 
	
      
  $dsfasd = "as";
	 
  
?>
								
					<span ><b>Order By:</b></span>	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FullName: <u><?php echo $user_name; ?></u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email: <u><?php echo $emailaddress; ?></u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Department: <u><?php echo $order_by_dept; ?></u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Order Date: <u><?php echo $order_date; ?></u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Order Time: <u><?php echo $order_time; ?></u><br>
         

				<?php
				if( $order_status=="working" || $order_status=="completed" || $order_status=="canceled")
				{
				 
					
?>				
					<span ><b>Join By:</b></span>	<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FullName: <u><?php echo $join_user_name; ?></u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email: <u><?php echo $join_emailaddress; ?></u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Department: <u><?php echo $join_by_dept; ?></u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Join Date: <u><?php echo $join_date; ?></u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Join Time: <u><?php echo $join_time; ?></u><br>       
			<?php } 
			if($cancel_by==$join_by)
	{
     $cancel_name = $join_user_name;
	$cancel_email = $join_emailaddress;
	}
	else
	{
		$cancel_name = $user_name;
	$cancel_email = $emailaddress;
	}
			
			?>
					<span ><b>Status:</b></span><br>			
									<?php
				if( $order_status=="start"  )
				{
?>			
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <b style="color:red;"><u>Not Join By Any one Yet!</u></b><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<span onclick="join(<?php echo $order_id;?>)"  class="btn    bs-tooltip rounded  btn-success btn-round btn-xs" title="Join Order">
							<i class="fas fa-journal-whills">  Join Order </i>   
						 </span> 
						 
 	<?php } ?>
					
									<?php
				if( $order_status=="working"  )
				{
?>					
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <b style="color:green;"><u>Working!</u></b><br><br>
 						 <span onclick="complete(<?php echo $order_id;?>)"  class="btn    bs-tooltip rounded  btn-success btn-round btn-xs" title="Change Status To Complete">
							<i class="fas fa-journal-whills"></i>  &nbsp; Complete order
						 </span> 
 
  <?php } ?>
 
									<?php
				if( $order_status=="completed"  )
				{
?>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <b style="color:green;"><u>Completed!</u></b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Completed Date: <u><?php echo $complete_date; ?></u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Completed Time: <u><?php echo $complete_time; ?></u><br>
	<?php } ?>

									<?php
				if( $order_status=="canceled"  )
				{
?>	
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <b style="color:red;"><u>Canceled!</u></b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Canceled By: <u><?php echo $cancel_name; ?></u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Canceled Date: <u><?php echo $cancel_date; ?></u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Canceled Time: <u><?php echo $cancel_time; ?></u><br>

	<?php } ?>


	
								
                            </div>
												 
                                                 
                                                
							<script>
									function join(id)
									{
										swal({
  title: "Are you sure?",
  text: "Join  this Order ?,It Will Be Added To Your Active Order List!",
  icon: "info",
  buttons: true,
  dangerMode: false,
})
.then((willDelete) => {
  if (willDelete) {
   // swal("Successfully!Order Request Added To Your Active Order List!", {
    //  icon: "success",
  //  });
	window.location="join-order?id="+id;
  } else {
   // swal("No Change!");
  }
});
									}
									</script>				 
											  
							 
 
											 
											 
											
                                    	
                                            </div>
										 
 
											 
                                        </div>
                                         
                                    </form>
                                        </div>

                                        <div class="col-sm-6" style="border:2px solid black;">
										<div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Order Items Detail:</h4>
                                    </div>           
                                </div>
                            </div>
							
 
							
                                            <div id='right-defaults' class='dragula'>
                                               

											   
							<?php	

			 include '../connection.php';
 $order_id = $_GET['order-id'];			
			
$sql = "SELECT * FROM  order_items
INNER JOIN items ON items.it_id=order_items.it_id	
where  order_items.order_id='$order_id'  
";

$result = $conn->query($sql);

$i=0;


if ($result->num_rows > 0) {
     
   while($row = $result->fetch_assoc())
   {				   
					


					$i++;
											   
											   
											   
											echo '   <div class="media  d-md-flex d-block text-sm-left text-center">
                                                    <img alt="avatar" src="assets/item.png" class="img-fluid ">
                                                    <div class="media-body">
                                                        <div class="d-xl-flex d-block justify-content-between">
                                                            <div class="">
                                                                <h6 class="">'.$row['it_name'].'</h6>
                                                                <p class="">Total QTY/Cases: '.$row['qty'].'</p>
                                                                <p class="">Note: <u>'.$row['note_old'].'</u></p>
                                                            </div>
                                                            <div  >
                                                                <button  class="btn bs-tooltip  btn-success btn-sm" ># '.$i.'</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';
												}
 
												}
												else
												{
			echo "<center><h4>No Iteam Reserved!</h4></center>";	
  echo'                              <hr>
		   <span class="btn btn-success bs-tooltip "  title="Submit Order">
		   <i class="fas  fa-cart-arrow-down"></i> &nbsp;&nbsp; Submit Order</span>';			
												}

                                              
 
        
                                                         
                                             
?>




											 
                                            </div>
											<script>
											function sure()
											
											{
											swal({
  title: "Are you sure?",
  text: "  Order Request will Submit for these items in your Cart!",
  icon: "warning",
  buttons: true,
  dangerMode: false,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your New Order has been Submit Successfully!", {
      icon: "success",
    });
	window.location="submit-order";
  } else {
   // swal("Order Not Place!");
  }
});
											
											}
											
											</script>
											
											<script>
											function remove(id)
											
											{
											swal({
  title: "Are you sure?",
  text: "  Remove This Item From Cart!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Item Remove From Cart Successfully!", {
      icon: "success",
    });
	window.location="remove-item?item="+id;
  } else {
    
  }
});
											
											}
											
											</script>
											
 <script>
									function complete(id)
									{
										swal({
  title: "Are you sure?",
  text: "Complete Order? It Will Be Added To Your Complete Order List!",
  icon: "info",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    
	window.location="complete-order?id="+id;
	
  } else {
   // swal("No Change!");
  }
});
									}
									</script>
											
                                        </div>

                                    </div>
                                </div>

                               

                            </div>
                        </div>
                    </div>

                    
 
 

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

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="plugins/drag-and-drop/dragula/dragula.min.js"></script>
    <script src="plugins/drag-and-drop/dragula/custom-dragula.js"></script>
	<script>
	$(".placeholder").select2({
    placeholder: "Make a Selection",
    allowClear: true
});
$(".nested").select2({
    tags: true
});
	</script>
    <!-- END PAGE LEVEL SCRIPTS --><!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="plugins/select2/select2.min.js"></script>
    <script src="plugins/select2/custom-select2.js"></script>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo5/dragndrop_dragula.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:10:23 GMT -->
</html>