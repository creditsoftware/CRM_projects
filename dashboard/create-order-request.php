<?php

include "gets_user.php";

?>
<!DOCTYPE html>
<html lang="en">

<?php

require 'head.php';

?>
<head>
   

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
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Create New Order Request:</h4>
                                    </div>           
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class='parent ex-1'>
                                    <div class="row">

                                        <div class="col-sm-6">
                                           <form  autocomplete="off" method="POST" class="needs-validation" novalidate   enctype="multipart/form-data">
                                        <div class="form-row">
                                            
                                            
                                            <div class="col-md-8  ">
                                                <label for="validationTooltipUsername">Product Name</label>
                                                <span style="color:red;display:none;" id="name" > Product Name Required*</span>
                                                
                                          
						<select id="product" class="form-control  basic" required>
                                      <option value="">Chose...</option>
                                             													 	 <?php
					
					// for connection

include '../connection.php';

 
 $sql = "SELECT * FROM items where   is_dell='no'";

$result = $conn->query($sql);
 	 $dept = '';
 
 
	
	 
    while($row = $result->fetch_assoc())
     {
		 
		 $apples = $row['it_id']; 
		 $Apples = $row['it_name'];
		 $count = $row['count'];
 
 
	echo   "<option value ='".$apples."'>".$Apples." ( Available = ".$count.")
	
	Note:<u>".$row['note']."</u>
	</option>";
     
	
	 }
 
		?>
                                    </select>
												<br>
												 
												<label for="validationTooltipUsername">Quantity / Cases</label>
												<span style="color:red;display:none;" id="quan" > Quantity / Cases Required*</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">Required (QTY/Cases) = </span>
                                                    </div>
                                                    <input type="text" pattern="[0-9]*" class="form-control" name="invoice" id="count" placeholder="0000" aria-describedby="validationTooltipUsernamePrepend" required />
                                                    <div class="invalid-tooltip">
                                                       Invalid  Input
                                                    </div>
                                                </div>
                                                
											 <br>
											 
											  <span id="fake" style="cursor:not-allowed;display:none;" class="btn btn-danger bs-tooltip mt-2"   title="Please Wait for Response"   >Please Wait...!
											 </span>
							 
 
											 <span id="add-to-cart" style="width:100%; " onclick="addToCart()" class="btn btn-primary bs-tooltip "   title="Add To Cart"   >+ Add To Cart
											 </span> 
											 
											
                                    	
                                            </div>
											<script>
											
											function addToCart()
											{
											 
											document.getElementById('name').style.display="none";
											document.getElementById('quan').style.display="none";
											document.getElementById('add-to-cart').style.display="none";
											document.getElementById('fake').style.display="block";
											
											var product = document.getElementById('product').value;
											var quan = document.getElementById('count').value;
											
											 if(product=="")
											 {
											 document.getElementById('name').style.display="block";
											 
											document.getElementById('add-to-cart').style.display="block";
											document.getElementById('fake').style.display="none";
											 
											 }
											 else
											 {
											 if(quan=="")
											 {
											 document.getElementById('quan').style.display="block";
											 
										document.getElementById('add-to-cart').style.display="block";
											document.getElementById('fake').style.display="none";
											 
											 }
											 else
											 {
											  var numbers = /^[0-9]+$/;
											  if(product.match(numbers))
											 {
											 
											    
											  if(quan.match(numbers))
											 {
											  // date is ok you can continue
											  // check the difference between 
											  // enter count and available stock 
                                            if(quan < 1)
											 {
								 swal("Invalid QTY/Cases!", "Enter Positive Number!", "warning");			 
											 document.getElementById('add-to-cart').style.display="block";
											document.getElementById('fake').style.display="none";
										  
											
											}
											else
													{											
											 check_stock(product, quan);
										}   // subtract count
											  //enter in data base 
											  //after enter in data base display itema 
											  //delete dynamic 
											 
											  
											 
                                          }
										  else
										  {
										  
										  swal("Invalid QTY/Cases!", "Enter only Digits in this Field!", "warning");
											 
											 document.getElementById('add-to-cart').style.display="block";
											document.getElementById('fake').style.display="none";
										  
										  }
											 
											 }
											 else
											 {
											 
											swal("Invalid Product Name!", "Please Select Product Name From List Given!", "warning");
											 
											 document.getElementById('add-to-cart').style.display="block";
											document.getElementById('fake').style.display="none";
											 
											 }
											 
											 
											 }
											 
											 }
											 
											 
											
											
											
											}
											
											
                                     											
									function check_stock(pid,con){
 				  var user = {         
            pid: pid ,
            quan: con			
        
            };
			
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "check_stock.php", true);
        xmlhttp.setRequestHeader('Content-type','application/json; charset=utf-8'); //declare that you are sending json data
        var studentData = JSON.stringify(user); //convert your json object into json string to be passed on
        xmlhttp.send(studentData);     //it should be converted intro string before passing
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText=="no")
				{				
			 swal("Invalid Product Name!", "Please Select Product Name From List Given!", "warning");
			  document.getElementById('add-to-cart').style.display="block";
			 document.getElementById('fake').style.display="none";
											
		 
				}
				else if(this.responseText=="big")
				{
					 
 swal("Out OF Stock!", "Your Required QTY/Cases are Out of Stock!", "warning");
			  document.getElementById('add-to-cart').style.display="block";
			 document.getElementById('fake').style.display="none";

				}
				else if(this.responseText=="alerady")
				{
					 
 swal("Alerady Add-to-cart!", "This Iteam Is Alerady in Yor-cart!", "warning");
			  document.getElementById('add-to-cart').style.display="block";
			 document.getElementById('fake').style.display="none";

				}
				else if(this.responseText=="added")
				{
					 
 swal("Add-to-cart!", "Item Add-to-cart Successfully!", "success");
			  document.getElementById('add-to-cart').style.display="block";
			 document.getElementById('fake').style.display="none";
			 location.reload();

				}
				else
				{
					window.alert(this.responseText);
					 document.getElementById('add-to-cart').style.display="block";
			 document.getElementById('fake').style.display="none";
					 
				}
                 
            }
        };
}
											
											
											
											</script>
 
											 
                                        </div>
                                         
                                    </form>
                                        </div>

                                        <div class="col-sm-6" style="border:2px solid black;">
										<div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Your Reserved Order Request Items:</h4>
                                    </div>           
                                </div>
                            </div>
							
 
							
                                            <div id='right-defaults' class='dragula'>
                                               

											   
							<?php	

			 include '../connection.php';
				 
$sql = "SELECT * FROM  user_cart
INNER JOIN items ON items.it_id=user_cart.it_id	
where  user_cart.user_id='$user_id'  
";

$result = $conn->query($sql);

$i=0;


if ($result->num_rows > 0) {
     
   while($row = $result->fetch_assoc())
   {				   
					


					
											   
											   
											   
											echo '   <div class="media  d-md-flex d-block text-sm-left text-center">
                                                    <img alt="avatar" src="assets/item.png" class="img-fluid ">
                                                    <div class="media-body">
                                                        <div class="d-xl-flex d-block justify-content-between">
                                                            <div class="">
                                                                <h6 class="">'.$row['it_name'].'</h6>
                                                                <p class="">Total QTY/Cases: '.$row['need'].'</p>
                                                                <p class="">Note: <u>'.$row['note'].'</u></p>
                                                            </div>
                                                            <div onclick="remove('.$row['cart_id'].')" >
                                                                <button  class="btn bs-tooltip  btn-danger btn-sm" title="Remove"><i class="fas fa-window-close"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';
												}
											  echo'                              <hr>
		   <button onclick="sure()" class="btn btn-success bs-tooltip "   title="Submit Order">
		   <i class="fas  fa-cart-arrow-down"></i> &nbsp;&nbsp; Submit Order</button>';	
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
   // swal("Poof! Your New Order has been Submit Successfully!", {
   //   icon: "success",
  //  });
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