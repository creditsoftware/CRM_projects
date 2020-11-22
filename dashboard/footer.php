 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/apex/apexcharts.min.js"></script>
       <script src="assets/js/widgets/modules-widgets.js"></script>
	
	<!--Start of Tawk.to Script 
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f0b3b9467771f3813c0e472/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	
	<!--  BEGIN CUSTOM STYLE FILE  -->
    <script src="assets/js/elements/tooltip.js"></script>
    <!--  END CUSTOM STYLE FILE  -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/js/scrollspyNav.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
	
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="plugins/tagInput/tags-input.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
        var instance = new TagsInput({
            selector: 'skill-input'
        });
        instance.addData(['PHP', 'Wordpress', 'Javascript', 'jQuery'])



    </script>
	
	<?php
	if(isset($_SESSION['dept_name']))
 {
  echo '<script type="text/javascript">swal("Invalid Department Name!", "Your Entered Department Name Alerady Exist!", "warning");</script>';
   
unset($_SESSION['dept_name']); }
  
	?>
	
	<?php
	if(isset($_SESSION['dept_name_edit']))
 {
  echo '<script type="text/javascript">swal("No Change!", "You Made No Change!", "warning");</script>';
   
unset($_SESSION['dept_name_edit']); }
  
	?>
	
	<?php
	if(isset($_SESSION['dept_Add']))
 {
  echo '<script type="text/javascript">swal("Successfully!", "New Department Registered Successfully!", "success");</script>';
   
unset($_SESSION['dept_Add']); }
  
	?>
	<?php
	if(isset($_SESSION['edit_dept']))
 {
  echo '<script type="text/javascript">swal("Successfully!", "Edit Department Saved Successfully!", "success");</script>';
   
unset($_SESSION['edit_dept']); }
  
	?><?php
	if(isset($_SESSION['new_user']))
 {
  echo '<script type="text/javascript">swal("Successfully!", "New User Registered Successfully!", "success");</script>';
   
unset($_SESSION['new_user']); }
  
	?>
	
	<?php
	if(isset($_SESSION['email_e']))
 {
  echo '<script type="text/javascript">swal("Email Alerady Exist!", "Change Email!", "warning");</script>';
   
unset($_SESSION['email_e']); }
  
	?>
	
	<?php
	if(isset($_SESSION['username_e']))
 {
  echo '<script type="text/javascript">swal("UserName Alerady Exist!", "Change UserName!", "warning");</script>';
   
unset($_SESSION['username_e']); }
  
	?>
		
	<?php
	if(isset($_SESSION['invalid_dept']))
 {
  echo '<script type="text/javascript">swal("Invalid Department Selected!", "Please Select Department From List Given!", "warning");</script>';
   
unset($_SESSION['invalid_dept']); }
  
	?>
	
	<?php
	if(isset($_SESSION['edit_user']))
 {
  echo '<script type="text/javascript">swal("Published Update!", "Edit User Successfully Saved!!", "success");</script>';
   
unset($_SESSION['edit_user']); }
  
	?>
	
	
	<?php
	if(isset($_SESSION['new_item']))
 {
  echo '<script type="text/javascript">swal("Saved Successfully!", "New Item Registered Successfully!", "success");</script>';
   
unset($_SESSION['new_item']); }
  
	?>
	<?php
	if(isset($_SESSION['error_item']))
 {
  echo '<script type="text/javascript">swal("Item Name Alerady Exist!", "Please Change Item Name!", "warning");</script>';
   
unset($_SESSION['error_item']); }
  
	?>
	<?php
	if(isset($_SESSION['savee_item']))
 {
  echo '<script type="text/javascript">swal("Record Update!", "Item Record Successfully Update!", "success");</script>';
   
unset($_SESSION['savee_item']); }
  
	?>
	
	 
	<?php
	if(isset($_SESSION['order']))
 {
  echo '<script type="text/javascript">swal("Successfully !", "New Order Request Successfully Submit!", "success");</script>';
   
unset($_SESSION['order']); }
  
	?>
	
	 
	<?php
	if(isset($_SESSION['joined']))
 {
  echo '<script type="text/javascript">swal("Alerady Joined !", "This Order Is Alerady Joined By Someone!", "warning");</script>';
   
unset($_SESSION['joined']); }
  
	?><?php
	if(isset($_SESSION['completed']))
 {
  echo '<script type="text/javascript">swal("Alerady Completed !", "This Order Is Alerady Completed By Someone!", "warning");</script>';
   
unset($_SESSION['completed']); }
  
	?><?php
	if(isset($_SESSION['canceled']))
 {
  echo '<script type="text/javascript">swal("Alerady Canceled !", "This Order Is Alerady Canceled By Someone!", "warning");</script>';
   
unset($_SESSION['canceled']); }
  
	?>
		 
	<?php
	if(isset($_SESSION['sjoined']))
 {
  echo '<script type="text/javascript">swal("Successfully Joined !", "Added To your Active Order List!", "success");</script>';
   
unset($_SESSION['sjoined']); }
  
	?>
	
	 <?php
	if(isset($_SESSION['scompleted']))
 {
  echo '<script type="text/javascript">swal("Successfully Completed !", "Added To your Completed Order List!", "success");</script>';
   
unset($_SESSION['scompleted']); }
  
	?>
	
	 
	 <?php
	if(isset($_SESSION['sCanceled']))
 {
  echo '<script type="text/javascript">swal("Successfully Canceled !", "Added To your Canceled Order List!", "success");</script>';
   
unset($_SESSION['sCanceled']); }
  
	?>
	 
	 <?php
	if(isset($_SESSION['send_req']))
 {
  echo '<script type="text/javascript">swal("Send Cancel Request !", "Cancel Order Request Successfully Send to Agent!", "success");</script>';
   
unset($_SESSION['send_req']); }
  
	?>
	
	  
	 <?php
	if(isset($_SESSION['cancel_req']))
 {
  echo '<script type="text/javascript">swal("Get Back Cancel Request !", "Cancel Order Request Successfully Get Back From Agent!", "success");</script>';
   
unset($_SESSION['cancel_req']); }
  
	?>
	
	 
	 
	  
	 <?php
	if(isset($_SESSION['noti']))
 {
  echo '<script type="text/javascript">swal("Successfully Update !", "Notification For Users Successfully Update!", "success");</script>';
   
unset($_SESSION['noti']); }
  
	?>
	
	 
	 
	 
	 <?php
	if(isset($_SESSION['email']))
 {
  echo '<script type="text/javascript">swal("Thank You!", "Your Feedback About Service Successfully Submit!", "success");</script>';
   
unset($_SESSION['email']); }
  
	?>
	
	 
	 
	
	 
	
 