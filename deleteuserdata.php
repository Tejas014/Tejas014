<?php
   include("config.php");
   session_start();
   
      $id = mysqli_real_escape_string($db,$_GET['id']);
	  
	  
	  
	  $sql = "delete from users where Userid='$id'";	  
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('User Data Deleted Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='manageuser.php';</script>";
	

   //}
?>