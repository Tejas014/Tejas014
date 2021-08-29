<?php
include('config.php');

  // include("config.php");
   session_start();
  $current = mysqli_real_escape_string($db,$_POST['current']); 
   $uid = mysqli_real_escape_string($db,$_POST['uid']);
      $pass = mysqli_real_escape_string($db,$_POST['pass']); 
      $cpass = mysqli_real_escape_string($db,$_POST['cpass']); 
	  echo $pass;
	 
	if($pass==$cpass)
    {
        
	    $query="select * from users where Email='$uid' and Password='$current'";
		
		$result=mysqli_query($db,$query);
		
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		
		if($count>0)
		{
			 $sql = "update users set Password='$pass' where Email='$uid'";
	  //echo $sql;
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Password Changed Sucessfully !!');</script>";
	echo "<script type='text/javascript'>window.location='login.php';</script>";
		}
		else
		{
			echo "<script>
			alert('Current Password is wrong');
		window.location='changepassword.php';
				</script>";
		
			
		}
	
    }
    else
    {
        echo "<script>
        alert('Password and Confirm Password is not matching');
    window.location='changepassword.php';
            </script>";
    
        
    }
	  ?>