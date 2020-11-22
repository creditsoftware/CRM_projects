<?php

include "gets_user.php";

?>
<!DOCTYPE html>
<html lang="en">

 <?php

require 'head.php';

?>
<head>
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/apps/invoice.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    
</head>
<body class="sidebar-noneoverflow">
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
                <div class="row invoice layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="app-hamburger-container">
                            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                        </div>
                        <div class="doc-container">
                            <div class="tab-title">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="search">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <ul class="nav nav-pills inv-list-container d-block" id="pills-tab" role="tablist">
                                           
                           <?php
						   
						   include '../connection.php';
 	
						   
						   $sql = "SELECT * FROM invoice where user_id='$user_id'";

                       $result = $conn->query($sql);
 
                              while( $row = $result->fetch_assoc())
							  {
        
 								  						  date_default_timezone_set("Asia/Karachi");
	$Tdate = date('d-M-Y');
								  $date=date_create($row['invoice_date']);
date_add($date,date_interval_create_from_date_string("1 days"));
$due= date_format($date,"d-M-Y");
								  
						if($Tdate>$due && $row['is_active']=="no")
						{}
else{					
				
	 

									echo '	   <li class="nav-item">
                                                <div class="nav-link list-actions" id="invoice-000'.$row['invoice_id'].'" data-invoice-id="000'.$row['invoice_id'].'">
                                                    <div class="f-m-body">
                                                        <div class="f-head">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                        </div>
                                                        <div class="f-body">
                                                            <p class="invoice-number">Invoice #000'.$row['invoice_id'].'</p>
                                                            <p class="invoice-customer-name"><span>To:</span> '.$fullname.'</p>
                                                            <p class="invoice-generated-date">Date: '.$row['invoice_date'].'</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>';
}  }
                                           
                                  ?> 
                                             
                                             

                                             
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="invoice-container">
                                <div class="invoice-inbox">

                                    <div class="inv-not-selected">
                                        <p>Open an invoice from the list.</p>
                                    </div>

                                    <div class="invoice-header-section">
                                        <h4 class="inv-number"></h4>
                                        <div class="invoice-action">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer action-print" data-toggle="tooltip" data-placement="top" data-original-title="Reply"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                        </div>
                                    </div>
                                    
                                    <div id="ct" class="">
                                        
                                        
										
										
										
										
										
										
										
  <?php
						   
						   include '../connection.php';
 	
						   
						   $sql = "SELECT * FROM invoice where user_id='$user_id'";

                       $result = $conn->query($sql);
 
                              while( $row = $result->fetch_assoc())
							  {
								     
 								  						  date_default_timezone_set("Asia/Karachi");
	$Tdate = date('d-M-Y');
								  $date=date_create($row['invoice_date']);
date_add($date,date_interval_create_from_date_string("1 days"));
$due= date_format($date,"d-M-Y");
								  
						if($Tdate>$due && $row['is_active']=="no")
						{}
else{					
				
	 
								  $pkg = $row['pkg_id'];

								  $sql = "SELECT * FROM packeges_plan where pkg_id='$pkg'";

$resultt = $conn->query($sql);
 
    $roww = $resultt->fetch_assoc();
     
     $title   =$roww['title'];
     $validity	   =$roww['validity'];
     $monthly	   =$roww['monthly'];
     

									echo '	
										
										<div class="invoice-000'.$row['invoice_id'].'">
                                            <div class="content-section  animated animatedFadeInUp fadeInUp">

                                                <div class="row inv--head-section">

                                                    <div class="col-sm-6 col-12">
                                                        <h3 class="in-heading">INVOICE :: ';
														if($row['is_active']=="no")
														{	
														echo '<b style="color:red;"> Un-Paid</b>';
														}
														else
														{
												  echo '<b style="color:green;">Paid</b>';
														}
														
														
													echo'	</h3>
                                                    </div>
                                                    <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                        <div class="company-info">
														<img src="invo.PNG"/>
                                                              
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <div class="row inv--detail-section">

                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-to">Invoice To </p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                        <p class="inv-detail-title">From : PakInvestEarn.com</p>
                                                    </div>
                                                    
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-customer-name">'.$fullname.'</p>
                                                        <p class="inv-street-addr">City: '.$city.'</p>
                                                        <p class="inv-email-address">'.$emailaddress.'</p>
														
														<br>
	     <p class="inv-list-number"><span class="inv-customer-name">Payment Information </span> <span class="inv-date"> </span></p>
	     
	     <p class="inv-list-number"><span class="inv-title"> JazzCash Account</span> <span class="inv-date"></span></p>
	     <p class="inv-list-number"><span class="inv-title"> Account Title:</span> <span class="inv-date">Muhammad Mohsin Majeed</span></p>
	     <p class="inv-list-number"><span class="inv-title"> Account Number:</span> <span class="inv-date">0309 2466 775</span></p>
	     
	     <br>
	    
	     <p class="inv-list-number"><span class="inv-title"> Bank Account</span> <span class="inv-date">MCB Muslim Commercial Bank</span></p>
	     <p class="inv-list-number"><span class="inv-title"> Account Title:</span> <span class="inv-date">Muhammad Mohsin Majeed</span></p>
	     <p class="inv-list-number"><span class="inv-title"> Account Number:</span> <span class="inv-date">1131036831006501</span></p>
	     
	     <br>
	     <p class="inv-list-number"><span class="inv-title">After Transcation Submit Your Application At:</span> <span class="inv-date"></span></p>
	     <p class="inv-list-number"><span class="inv-title"></span> <span class="inv-date"><a style="color:blue;" href="http://pakinvestearn.com/user-dashboard/submit-application">http://pakinvestearn.com/user-dashboard/submit-application</a> </span></p>
												
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                        <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                        <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">'.$row['invoice_date'].'</span></p>';
														
														$date=date_create($row['invoice_date']);
date_add($date,date_interval_create_from_date_string("1 days"));
$due= date_format($date,"d-M-Y");
 

                                                    echo'   <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">'.$due.'</span></p>';
                                                    echo' <hr>
                                                    <hr>
													</div>
                                                </div>

                                                <div class="row inv--product-table-section">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">S.No</th>
                                                                        <th scope="col">Packege</th>
                                                                        <th class="text-right" scope="col">Validity</th>
                                                                        <th class="text-right" scope="col">Unit Price</th>
                                                                        <th class="text-right" scope="col">Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>'.$title.'</td>
                                                                        <td class="text-right">'.$validity.' Days</td>
                                                                        <td class="text-right">Rs:'.$monthly.'</td>
                                                                        <td class="text-right">Rs:'.$monthly.'</td>
                                                                    </tr>
 
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                        <div class="inv--payment-info">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-12">
                                                                    <h6 class=" inv-title">Receiver Contact:</h6>
                                                                </div>
                                                                <div class="col-sm-4 col-12">
                                                                    <p class=" inv-subtitle">Name: </p>
                                                                </div>
                                                                <div class="col-sm-8 col-12">
                                                                    <p class="">PakInvestEarn</p>
                                                                </div>
                                                                <div class="col-sm-4 col-12">
                                                                    <p class=" inv-subtitle">Mobile Number : </p>
                                                                </div>
                                                                <div class="col-sm-8 col-12">
                                                                    <p class="">0309 2466 774</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="inv--total-amounts text-sm-right">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Sub Total: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">Rs:'.$monthly.'</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Tax Amount: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">Rs:00</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class=" discount-rate">Discount : <span class="discount-percentage">0%</span> </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">Rs:00</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7 grand-total-title">
                                                                    <h4 class="">Grand Total : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount">
                                                                    <h4 class="">Rs:'.$monthly.'</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												</div>
                                        </div> ';
										
}  }
							  ?>

 
 
 
                                                
                                    </div>


                                </div>

                                <div class="inv--thankYou">
                                    <div class="row">
                                        <div class="col-sm-12 col-12">
                                            <p class=""><b style="color:orange;"><u>Note: </u>You Can Activate Only One Packege At a Time:</b>
											<br>Thank you for doing Business with us.</p>
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
        <!--  END CONTENT AREA  -->


    </div>
   <?php 
   
   require 'footer.php';
   
   ?>
    <script src="assets/js/apps/invoice.js"></script>
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo5/apps_invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:08:04 GMT -->
</html>