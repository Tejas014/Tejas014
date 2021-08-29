<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $uname = mysqli_real_escape_string($db,$_POST['uname']);
      $pswd = mysqli_real_escape_string($db,$_POST['pswd']); 
	  $gender = mysqli_real_escape_string($db,$_POST['gender']); 
	  $add = mysqli_real_escape_string($db,$_POST['add']); 
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $ph = mysqli_real_escape_string($db,$_POST['ph']); 
      //$uid = mysqli_real_escape_string($db,$_POST['uid']); 
      
	  $sql = "Insert into users values ('$uname','$email','$pswd','$gender','$ph','$add','Users')";
	  
      $result = mysqli_query($db,$sql);
	  
    
     
   }





		echo "<script type='text/javascript'>alert('Registered Successfully !!');</script>";
		echo "<script type='text/javascript'>window.location='login.php';</script>";
?>	  