<?php
   include("adminhead.php");
   
   ?>
   
      <?php session_start(); ?>
	<html>
	<div><br></div>
<div><br></div>
<div><br></div>
<div><br></div>
<div><br></div>

<body>
<div style="width:100%;float:left;padding-left:15px;padding-top:10px;min-height:550px;>
         
            <div style="width:50%;float:left;padding-left:1px;">
            	<form method="post" action="savedata.php">
				<h1 style="font-weight:bolder;font-size:25px;color:red;text-align:center;">  Manage the Choreographer !!!</h1> <br><br>
				<?php

include('config.php');
//$a= $_SESSION['email'];


$result = mysqli_query($db,"SELECT * FROM users where Status='President'")or die(mysqli_error());

echo "<table border='1' cellpadding='10' width='1200px'>";
echo "<tr style='text-decoration:underline;text-align:center;'>
<th><font color='#ffff00'size:'40px';>President Name</font></th>
<th><font color='#ffff00'>Email</font></th>
<th><font color='#ffff00'>Gender</font></th>
<th><font color='#ffff00'>Phone Number</font></th>
<th><font color='#ffff00'>Address</font></th>
<th><font color='#ffff00'>Delete</font></th>
</tr>";

while($row = mysqli_fetch_array( $result ))
{

echo "<tr align='center'>";
echo '<td><b><font color="#663300">' . $row['Name'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Email'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Gender'] . '</font></b></td>';

echo '<td><b><font color="#663300">' . $row['Phone'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Address'] . '</font></b></td>';
echo '<td><b><font color="#ffff00"><a href="deletepresident.php?id=' . $row['Email'] . '">Delete</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>
                </form>
            </div>


</div>

</body>
</html>