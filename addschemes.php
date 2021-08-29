<?php
   include("phead.php");
   include("config.php");
   ?>

  
   
   <html>
   <div><br></div>
   <div><br></div>
   <div><br></div>
   <div></div>
   <div></div>
<body onload="myFunction()">
   <div style="height:600px;background-color:#;padding-top:40px;">
		<div style="width:50%;float:left;margin:0;background-color:#;">
		<img src="./images/ap.jpg" style="width:100%;height:600px;padding-left:40px;"/>
            </div>

            <div style="width:50%;float:left;padding-left:55px;padding-top:30px;height:600px;background-color:#;">
            	<form method="post" action="addschemedata.php"  enctype="multipart/form-data">
				<table class="style1">
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="center" colspan="2">
                            <span style="font-weight:bolder;font-size:25px;color:black;">Upload Schemes !!!</span></td>
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
                            <span style="font-size:20px;font-weight:bold;"> Scheme Name: </span></td>
                        <td>
                        &nbsp;
                        <input type="text" placeholder="" id="sname" name="sname"  style="display: inline-block;border: 1px solid #ccc;border-radius: 2px;" />
                        <input type="text" placeholder="" hidden id="sid" name="sid"  style="display: inline-block;border: 1px solid #ccc;border-radius: 2px;" />
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
                            <span style="font-size:20px;font-weight:bold;">Description: </span></td>
                        <td>&nbsp;
						<textarea name="desc" id ="desc" rows="6" cols="35" style="display: inline-block;border: 1px solid #ccc;border-radius: 2px;"></textarea>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>                   
                    
                  
                    
					  <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right"> <span style="font-size:20px;font-weight:bold;">Upload Pic: </span></td>
                        <td>&nbsp;
						
								<input type="file" style="display: inline-block;border: 1px solid #ccc;border-radius: 2px;" onchange="readURL(this);"  name="userfile" id="userfile" value="Choose file" >
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
                            <input id="reset" type="reset" value="Reset" class="button1" /></td>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input id="logi" type="submit" value="Add Schemes"class="button"  onclick="return validator();" /></td>
                        </td>
                        <td>
                            &nbsp;</td>
                    </tr>
                </table>
                </form>
            </div>


</div>


</body>
<script src="js/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="vendors/popup/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/theme.js"></script>
	<script>
									function readURL(input) {
						
										if (input.files && input.files[0]) {
											var reader = new FileReader();

											reader.onload = function (e) {
												$('#student_Img')
													.attr('src', e.target.result);
											};

											reader.readAsDataURL(input.files[0]);
										}
									}
									
		function valcost()
		{
			debugger;
			  var cost = document.getElementById('cost').value;
       
        var costpat = /^[0-9]+$/;
        if (!costpat.test(cost) || cost == '') {
            alert('Please enter a valid cost.');
           
            document.getElementById('cost').focus();
        }
		}
		
		function validator()
		{
		if(document.getElementById('wname').value=="" || document.getElementById('cost').value=="")
		{
                                alert('Please enter  all data.');
                                return false;
		}
		else
		{
			 var cost = document.getElementById('cost').value;
                            var intRegex = /^[0-9]+$/;
                            if ((cost.length < 3) || (!intRegex.test(cost))) {
                                alert('Please enter a valid cost.');
                                $("#cost").focus();
                                return false;
                            }
                  
                            var wname = document.getElementById('wname').value;
                            var wnameReg =  /^[a-zA-Z0-9 ]+$/;
                            if (!wnameReg.test(wname) || wname == '') {
                                alert('Please enter a valid wall paper.');
                                $("#wname").focus();
                                return false;
                            }
                            return true;
		}
		}
								</script>
								<script>
		function myFunction()
		{
		debugger;
		document.getElementById('sid').value="Cop"+Math.floor((Math.random() * 1234) + 1);
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