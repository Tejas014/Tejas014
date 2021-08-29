
		<?php
   include("config.php");
       session_start(); 
if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			
			$cname=$_POST['cname'];
			$cid=$_POST['cid'];
			$ctype=$_POST['ctype'];
			$desc=$_POST['desc'];
			$a= $_SESSION['uname'];
			
		
			
		   
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
					$query = "insert into complaint values('$cname','$cid','$ctype','$desc','$filename','$path','$a','Pending')";
					//echo $query;
					mysqli_query($db,$query);
					echo "<script> alert('Poster Added successfully')</script>";
					echo "<script>window.location='addcomplaint.php';</script>";
				}
			
			
		}
		?>