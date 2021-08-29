<?php 
include('userhead.php');
?>
<?php
   session_start();
   if($_SESSION['uname']=="" || $_SESSION['uname']==null){
	//echo "<script> window.location = 'login.html'; </script>" ; 
   }
?>
<html>
<body>
<br>  <br>  <br>  <br>  

<div style="width:40%;float:left;margin:0;">
			<img src="./images/cp.jpg" style="width:100%;height:550px;"/>
        </div>
		
		<div style="width:60%;float:left;padding-left:60px;padding-top:1px;height:150px;">
            	<form method="post" action="cpdata.php" onSubmit="return validatePassword();" >
				<table class="style1">
                   
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="center" colspan="2">
                            <span style="font-weight:bolder;font-size:25px;color:black;">Change Password Here</span></td>
                        <td>
                            &nbsp;</td>
                    </tr>
					
                    <?php 
							
						
							$a= $_SESSION['uname'];
 //$id = mysqli_real_escape_string($db,$_GET['id']);

	//echo $_SESSION['uname'];
?>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">User ID: </span></td>
                        <td>&nbsp;
							<input class="form-control" type="text" id="uid" name="uid" placeholder="" readonly value="<?php echo $a; ?>" required="">                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
							</tr>
							<tr>
							<td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">Current Password: </span></td>
                        <td>&nbsp;
							<input class="form-control" type="password" id="current" name="current" placeholder=""  required="">                            &nbsp;</td>
							
							<td>
                            &nbsp;</td>
                    </tr>
					<tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">Password: </span></td>
                        <td>&nbsp;
							<input class="form-control" type="password" id="pass" name="pass" placeholder=""  value="" required="">                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
							</tr>
							<tr>
							<td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">Confirm Password: </span></td>
                        <td>&nbsp;
							<input class="form-control" type="password" id="cpass" name="cpass" placeholder=""  value="" required="">                            &nbsp;</td>
							
							<td>
                            &nbsp;</td>
                    </tr>
					


                    
                    
                    
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <input id="reset" type="reset" value="Reset" style="background-color:#d5ec57;border-radius:5px;width:150px;height:35px;" /></td>
                        
						<td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input id="logi" type="submit" value="Change Password" style="height:35px;background-color:#00FF00;border-radius:5px;width:150px;"  /></td>
                        </td>
                        <td>
                            &nbsp;</td>
							
                    </tr>
                   
					
                </table>
                </form>
            </div>
		


</div>

	

</body>


	<script>
function validatePassword() {
var current,pass,cpass,output = true;

current = document.frmChange.current;
pass = document.frmChange.pass;
cpass = document.frmChange.cpass;

if(!current.value) {
current.focus();
document.getElementById("current").innerHTML = "required";
output = false;
}
else if(!pass.value) {
pass.focus();
document.getElementById("pass").innerHTML = "required";
output = false;
}
else if(!cpass.value) {
cpass.focus();
document.getElementById("cpass").innerHTML = "required";
output = false;
}
if(pass.value != cpass.value) {
pass.value="";
cpass.value="";
pass.focus();
document.getElementById("cpass").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>
</html>