<?php
include "gets_user.php";
if($type=="admin")
{}
else
{
	header("Location:index");
}
?>
<!DOCTYPE html>
<html lang="en">

<?php

require 'head.php';

?><head>
   
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/apps/contacts.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->    
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
                <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="widget-content searchable-container list">

                            <div class="row">
                                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                                    <form class="form-inline my-2 my-lg-0">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                            <input type="text" class="form-control product-search" id="input-search" placeholder="Search Contacts...">
                                        </div>
                                    </form>
                                </div>

                                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                                    <div class="d-flex justify-content-sm-end justify-content-center">
                  
                                        <div class="switch align-self-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list view-list active-view"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid view-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                               
                                </div>
                            </div>

                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content">
                                         
                                       
										<div class="user-email">
                                            <h4>Full Name</h4>
                                        </div>
										 <div class="user-email">
                                            <h4>Email</h4>
                                        </div>
										 
										  <div class="user-email">
                                            <h4>User Name</h4>
                                        </div>
										 
										 
										 
										<div class="user-email">
                                            <h4>Department</h4>
                                        </div>
										 
										<div class="user-email">
                                            <h4>Password</h4>
                                        </div>
                                         
										<div class="user-email">
                                            <h4>Date/Time</h4>
                                        </div>
										<div class="user-email">
                                            <h4>Action</h4>
                                        </div>
                                         
                                         
                                    </div>
                                </div>
<?php	

			 include '../connection.php';
				 
$sql = "SELECT * FROM  registered_users
INNER JOIN department ON department.dept_id=registered_users.dept
where  registered_users.is_dell='no'  
";

$result = $conn->query($sql);

$i=0;


if ($result->num_rows > 0) {
     
   while($row = $result->fetch_assoc())
   {
        
					$i = $i+ 1;					 		
								 	
                            	echo'	    <div class="items">
                                    <div class="item-content">
                                        <div class="user-profile">
                                             '.$i.'
                                            <img style="width:40px;" src="assets/img/img.png" alt="avatar">
                                            <div class="user-meta-info">
                                                <p class="user-name" data-name="Alan Green">'.ucwords($row['first_name']).ucwords($row['last_name']).'</p>
                                                <p class="user-work" data-occupation="Web Developer">'.$row['emailaddress'].'</p>
                                            </div>
                                        </div>
                                        <div class="user-email">
                                            <p class="info-title">User Name: </p>
                                            <p class="usr-email-addr"  >'.$row['user_name'].'</p>
                                        </div>   
                                        <div class="user-location">
                                            <p class="info-title">Department: </p>
                                            <p class="usr-location" >'.$row['dept_name'].'</p>
                                        </div>
                                        <div class="user-phone">
                                            <p class="info-title">Password: </p>
                                            <p class="usr-ph-no"  >'.$row['password'].'</p>
                                        </div>
										<div class="user-phone">
                                            <p class="info-title">Date/Time: </p>
                                            <p class="usr-ph-no"  >'.$row['date'].'<br>'.$row['time'].'</p>
                                        </div>
                                        <div class="action-btn">
                                       <a href="edit-user?ref='.$row['user_id'].'">     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 bs-tooltip edit" title="Edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                          </a>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather bs-tooltip feather-user-minus  "  title="Block User" style="color:red;cursor:pointer;" onclick="deactivete('.$row['user_id'].')"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                                        </div>
                                    </div>
                                </div> ';
								 
										
									
}
}
 



?>			
 	
 
                                
 
 
                               

                                 
                            </div>

                        </div>
                    </div>
                </div>
                </div>
				<script>
									function deactivete(id)
									{
										 
										swal({
  title: "Are you sure?",
  text: "Block User ,User will not be able to login!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your Selected User has been Blocked!", {
      icon: "success",
    });
	window.location="deleter-user?user="+id;
  } else {
    swal("No Change!");
  }
});
									}
									</script>
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
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/apps/contact.js"></script>
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo5/apps_contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 10:08:02 GMT -->
</html>