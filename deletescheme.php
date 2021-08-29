<?php
   include("config.php");
   session_start();
   
      $id = mysqli_real_escape_string($db,$_GET['id']);
	  
	  
	  
	  $sql = "delete from scheme where Cid='$id'";	  
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Scheme Deleted Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='pmscheme.php';</script>";
	

   //}
?>