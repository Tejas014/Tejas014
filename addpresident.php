<?php 
include('adminhead.php');
?>
<div><br></div>
<div><br></div>
<div><br></div>
<div><br></div>
<div><br></div>
<div style="width:40%;float:left;margin:0;">
			<img src="./images/addp.jpg" style="width:100%;height:700px;"/>
        </div>

        <div style="width:50%;float:left;padding-left:1px;height:500px;">
            	<form method="post" action="presidentdata.php">
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
                            <span style="font-weight:bolder;font-size:25px;color:black;">Add President Here !!!</span></td>
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
                            <span style="font-size:20px;font-weight:bold;"> President Name: </span></td>
                        <td>&nbsp;
                        <input type="text" id="uname" name="uname" required style="display: inline-block;border: 1px solid #ccc;border-radius: 2px;" onchange="valuname()"/>
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
                        <td>&nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr><tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">Email ID: </span></td>
                        <td>&nbsp;
                        <input type="email" id="email" name="email" required style="display: inline-block;border: 1px solid #ccc;border-radius: 2px;" onchange="valemail()"/>
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
                            <span style="font-size:20px;font-weight:bold;">Gender: </span></td>
                        <td>
                        &nbsp;
						
						<select id="gender" name="gender" required style="display: inline-block;border: 1px solid #ccc;border-radius: 4px;">
						<option >------Select------</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							
    </select>
                        
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
                            <span style="font-size:20px;font-weight:bold;">Phone# : </span></td>
                        <td>
                        &nbsp;
						
                        <input type="text"  id="ph" required name="ph" required style="display: inline-block;border: 1px solid #ccc;border-radius: 4px;"  onchange="valphone()"/>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr><tr>
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
                            <span style="font-size:20px;font-weight:bold;">Address# : </span></td>
                        <td>
                        &nbsp;
						
                        <textarea id="add" required name="add" style="display: inline-block;border: 1px solid #ccc;border-radius: 4px;" ></textarea>
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
                            <input id="reset" type="reset"  value="Reset" style="background-color:#d5ec57;border-radius:5px;width:150px;height:35px;" /></td>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input id="logi" type="submit" value="Add President"style="height:35px;background-color:#d5ec57;border-radius:5px;width:150px;" onclick="return validator();" /></td>
                        </td>
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
                </table>
                </form>
            </div>
		


</div>
   
 </section
 
</body>


<script>
		function myFunction()
		{
		debugger;
		document.getElementById('uid').value="Stu"+Math.floor((Math.random() * 1234) + 1);
		}
		
		
		function valuname()
		{
			var uname = document.getElementById('uname').value;
			var unamePattern = /^[A-Za-z ]+$/;
			if (!unamePattern.test(uname)) {
            alert('Please enter valid username.');
            document.getElementById('uname').focus();
        }
		}
		
		function valemail()
		{
			  var email = document.getElementById('email').value;
        var emailReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!emailReg.test(email) || email == '') {
            alert('Please enter a valid email id.');
           
            document.getElementById('email').focus();
        }
		}
		
		function valphone()
		{
			  var phone = document.getElementById('ph').value;
        var intRegex = /^(7|8|9)[0-9]{9}$/;
        if (!intRegex.test(phone)) {
            alert('Please enter a valid phone number.');
            document.getElementById('ph').focus();
        }
		}

</script>
</html>