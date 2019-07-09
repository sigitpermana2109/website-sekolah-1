 <?php  
 //logout.php  
 session_start();  
 session_destroy();  
 header("location:user.php?action=login");  
 ?>