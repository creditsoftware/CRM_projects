<?php

include "gets_user.php";

?>
<!DOCTYPE html>
<html lang="en">

<?php

require 'head.php';

?>
 <head>
     
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
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
                
                <div class="row layout-top-spacing" id="cancel-row">
                  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
					  <div class="widget-content widget-content-area br-6">
                       <div class="table-responsive mb-4 mt-4">
                               <b>Canceled Order List
                                   </b> <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                           <th>Sr#</th>
													<th>Order id</th>
													<th>Order By</th>
												 	 
													<th>Join By</th>
													 
													<th>Status</th>
													
													
											  
                                        </tr>
                                    </thead>
                                    <tbody>
									
							<?php	

			 include '../connection.php';
				 
				 
$sql = "SELECT * FROM  order_request
inner join registered_users on 
  order_request.order_by = registered_users.user_id
where  order_request.order_status	='canceled' 
and order_request.join_by = '$user_id' 
";


$result = $conn->query($sql);

$i=1;


if ($result->num_rows > 0) {
     
   while($row = $result->fetch_assoc())
   {
        
												
								echo'				<tr>
								
	  <td><div class="status">'.$i.'</div></td>
								 
							 
 
	 <td><div class="status">#'.$row['order_id'].'</div></td>
	 <td><div class="status">
	 Username: '.$row['user_name'].'<br>
	 Department: '.$row['order_by_dept'].'<br>
	 Email: <u>'.$row['emailaddress'].'</u>
	 
	 </div></td>
	 
 
	 <td><div class="status">
	 Username: '.$row['user_name'].'<br>
	 Department: '.$row['order_by_dept'].'<br>
	 Email: <u>'.$row['emailaddress'].'</u>
	 
	 </div></td>
	 
	 
  						 
  					 
								  
							  <td>
						 
						  <a href="view-order-details?order-id='.$row['order_id'].'" >
						<button class="btn bs-tooltip    btn-info btn-round btn-xs" title="View Items">
							<i class="fas fa-eye"> Details </i>
						 </button> 
						 </a>
						 </td>
						 
	 
						 
						 
										</tr>';
										$i++;
										
}
}
 



?>			
 				
                                    </tbody>
									<script>
									function complete(id)
									{
										swal({
  title: "Are you sure?",
  text: "Complete Order ,It Will Be Added To Your Complete Order List!",
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
									
                                </table>
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
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo5/table_dt_html5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:09:25 GMT -->
</html>