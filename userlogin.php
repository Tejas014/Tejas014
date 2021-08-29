<?php 
include('head.php');
?>
<!DOCTYPE html>
<html>
<div><br></div>
<div><br></div>
<div><br></div>


		<div style="width:40%;float:left;margin:0;">
			<img src="./images/login.jpg" style="width:100%;height:700px;"/>
        </div>
		<div style="width:60%;float:left;padding-left:100px;padding-top:100px;height:500px;">
            	<form method="post" action="userlogindata.php">
				<table class="style1">
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="center" colspan="2">
                            <span style="font-weight:bolder;font-size:25px;color:black;">Enter User Account !!!</span></td>
                        <td>
                            &nbsp;</td>
                    </tr>
					
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">Email ID: </span></td>
                        <td>&nbsp;
							<input class="form-control" type="text" id="uname" name="uname" placeholder="" required="">                            &nbsp;</td>
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
                        <td>
                        &nbsp;
                        <input class="form-control" type="password"  placeholder="" id="pswd" name="pswd"  required="">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    
                    
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
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
                             <input id="logi" type="submit" value="Login Account !!"style="height:35px;background-color:#00FF00;border-radius:5px;width:150px;" /></td>
                        </td>
                        <td>
                            &nbsp;</td>
                    </tr>
                  
                </table>
                </form>
            </div>
		


</div>
 </div>
      <!-- //banner -->
     
   </body>

	

</body>


	<script>
		function myFunction()
		{
		debugger;
		document.getElementById('uid').value="Cust"+Math.floor((Math.random() * 1234) + 1);
		}
		
			function valemail()
		{
			  var email = document.getElementById('uname').value;
        var emailReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(email!='admin')
		{
        if (!emailReg.test(email) || email == '') {
            alert('Please enter a valid email id.');
           
            document.getElementById('uname').focus();
        }
		}
		}
		
		
	</script>
</html>

