
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>E-Grama Panchayat</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Forest Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
      addEventListener("load", function () {
      	setTimeout(hideURLbar, 0);
      }, false);
      
      function hideURLbar() {
      	window.scrollTo(0, 1);
      }
    </script>
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
  </head>
  <body>
    <div class="header-outs" id="header">
      <div class="header-w3layouts">
        <div class="container-fluid">
          <nav>
            <div id="logo">
              <h1> <a href="index.html">E-Grama Panchayat</a></h1>
            </div>
            <label for="drop" class="toggle">Menu</label>
            <input type="checkbox" id="drop" />
            <ul class="menu mt-lg-3 mt-2">
              <li class="active"><a href="index.html">Home</a></li>
              <li ><a href="register.php">Register</a></li>
              <li><a href="login.php">Admin and President Login</a></li>
              <li><a href="userlogin.php">User Login</a></li>
              <li ><a href="" class="pr-0">Contact</a></li>
            </ul>
            <div class="clearfix"></div>
          </nav>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- //nav -->
      <!-- //header -->
      <div class="container">
        <div class="slide-info text-center">
          <div class="banner-top-grid">
            <h4>E-Grama Panchayat</h4>
          </div>
          <h5>Basic Step Towords Developed Country</h5>
          
          <div class="two-mid-button d-flex justify-content-center mt-lg-5 mt-md-4 mt-sm-4 mt-3">
            <div class="read-buttn ">
              <a href="register.php" class=" scroll">Register</a>
            </div>
            <div class="view-buttn">
              <a href="userlogin.php" class=" scroll">Login</a>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- about -->
    <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="title-tag mb-lg-5 mb-md-4 mb-sm-4 mb-3 pb-lg-3 pb-md-2">
          <h6 class="title-top-txt text-center mb-2">What we did</h6>
          <div class="sub-title-mid text-center mb-lg-4 mb-3">
            <h2>VIEW POSTERS</h2>
          </div>
         <?php 
		 include("config.php");
				$result = mysqli_query($db,"SELECT * FROM poster")or die(mysqli_error());

							while($row = mysqli_fetch_array( $result )){
							?>
        </div>
        <div class="row">
          <div class="col-lg-6 video-info-img text-center">
            <div class="abut-img-w3l">
              <img src="<?php echo $row['Imagepath'];?>" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6 left-abut-txt ">
            <div class="about-right-grid">
              <h6 class="title-top-txt mb-2"><?php echo $row['Added'];?></h6>
                      <h5 class="mb-3"><?php echo $row['Pname'];?></h5>
              <p><?php echo $row['Disc'];?></p></div>
            <?php
							}
			?>
              
              
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //row-two -->
    </section>
    <!--//about -->
    
   
   
          <!-- move icon -->
      
      <!--//move icon -->
    <
    <!--//footer -->
  </body>
</html>