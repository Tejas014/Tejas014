<?php
   include("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			
			$pname=$_POST['pname'];
			$desc=$_POST['desc'];
			
			//$years=$_POST['years'];
			
			
			
			
		   
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
					$query = "insert into poster values('$pname','$desc','$filename','$path','Admin')";
					//echo $query;
					mysqli_query($db,$query);
					echo "<script> alert('Poster Added successfully')</script>";
					echo "<script>window.location='addposter.php';</script>";
				}
			
			
		}
		?>