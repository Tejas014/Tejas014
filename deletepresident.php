<?php
   include("config.php");
   session_start();
   
      $id = mysqli_real_escape_string($db,$_GET['id']);
	  
	  
	  
	  $sql = "delete from users where Email='$id'";	  
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Prisident Deleted Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='maintainpresident.php';</script>";
	

   //}
?>