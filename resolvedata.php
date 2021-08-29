<?php
   include("config.php");
   session_start();
   
     if($_SERVER["REQUEST_METHOD"] == "POST") 
	 {
      // username and password sent from form 
      
      $cname = mysqli_real_escape_string($db,$_POST['cname']);
      $cid = mysqli_real_escape_string($db,$_POST['cid']);
      $solve = mysqli_real_escape_string($db,$_POST['solve']); 
	  $desc = mysqli_real_escape_string($db,$_POST['desc']); 
	  $ctype = mysqli_real_escape_string($db,$_POST['ctype']); 
	  
	  ////echo $solve;
	  //echo $cid;
	 
	  $sql = "update complaint set Sol='$solve' where Cid='$cid'";
	  //echo $sql;
      $result = mysqli_query($db,$sql);
	  
	//"update student set Status='Approved' where Userid='$id' and Status= 'Pending'";
	echo "<script type='text/javascript'>alert('Resolved Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='viewcmp.php';</script>";
	

   }
?>