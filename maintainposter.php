<?php
   include("adminhead.php");
   //include("config.php");
   ?>
   <?php session_start(); ?>

  <html>
<body>
       <br>
<br>
<br>
<br>
<br>
<div style="width:100%;float:left;padding-left:15px;padding-top:10px;min-height:550px;>
  
            <div style="width:50%;float:left;padding-left:1px;">
            	<form method="post" action="savedata.php">
				<h1 style="font-weight:bolder;font-size:25px;color:red;text-align:center;">  Manage the Poster !!!</h1> <br><br>
				<?php

include('config.php');
//$a= $_SESSION['email'];


$result = mysqli_query($db,"SELECT * FROM poster")or die(mysqli_error());

echo "<table border='1' cellpadding='10' width='1200px'>";
echo "<tr style='text-decoration:underline;text-align:center;'>
<th><font color='#ffff00'>Poster Name</font></th>
<th><font color='#ffff00'>Discription</font></th>
<th><font color='#ffff00'>Image</font></th>
<th><font color='#ffff00'>Added By</font></th>
<th><font color='#ffff00'>Delete</font></th>



</tr>";

while($row = mysqli_fetch_array( $result ))
{

echo "<tr align='center'>";
echo '<td><b><font color="#663300">' . $row['Pname'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Disc'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Added'] . '</font></b></td>';

//echo '<td><b><font color="#663300">' . $row['description'] . '</font></b></td>';
echo '<td><img src="' . $row['Imagepath'] .'" style="height:50px;width:50px;" /></td>';
echo '<td><b><font color="#ffff00"><a href="deleteposter.php?id=' . $row['Pname'] . '">Delete</a></font></b></td>';
//echo '<td><b><font color="#ffff00"><a href="deletefees.php?id=' . $row['Did'] . '">Delete</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>
                </form>
            </div>


</div>

</body>
</html>