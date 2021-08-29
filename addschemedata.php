
		<?php
   include("config.php");
       session_start(); 
if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			
			$sname=$_POST['sname'];
			$sid=$_POST['sid'];
			
			$desc=$_POST['desc'];
			//$a= $_SESSION['uname'];
			
		
			
		   
		   $uploaded_dir = "./uploads/"; 
		   $filename = $_FILES["userfile"]["name"]; 
		   $path = $uploaded_dir . $filename; 
		   
		    $imageFileType=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
				
				if($imageFileType!="jpg" )
				{
					echo "<script> alert('Image format error. Choose only PNG/JPG')</script>";
					
				}
				else
				{				   
					move_uploaded_file($_FILES["userfile"]["tmp_name"], $path);
				   
					
					//$wid="W"+mt_rand(100000, 999999);
					//$query = "insert into poster values('$pname','$desc','$filename','$path','Admin')";
					$query = "insert into schemes values('$sid','$sname','$desc','$filename','$path')";
					//echo $query;
					mysqli_query($db,$query);
					echo "<script> alert('Schemes Added successfully')</script>";
					echo "<script>window.location='addschemes.php';</script>";
				}
			
			
		}
		?>