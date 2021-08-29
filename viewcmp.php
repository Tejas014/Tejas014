<?php
   include("phead.php");
   //include("config.php");
   ?>
   <?php session_start(); ?>
<!-- about -->
<html>
<div><br></div>
<div><br></div>
<div><br></div>

    <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="title-tag mb-lg-5 mb-md-4 mb-sm-4 mb-3 pb-lg-3 pb-md-2">
          <h6 class="title-top-txt text-center mb-2">E-Grama panchyat</h6>
          <div class="sub-title-mid text-center mb-lg-4 mb-3">
            <h2>SOLVE THE COMPLAINT</h2>
          </div>
         <?php 
		$a= $_SESSION['uname'];
		 include("config.php");
				$result = mysqli_query($db,"SELECT * FROM complaint")or die(mysqli_error());

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
              <h6 class="class="mb-3""><?php echo $row['Cname'];?></h6>
                      <h5 class="mb-3">Priority : <?php echo $row['Ctype'];?></h5>
					  <h5 class="mb-3">Complaint : </h5>
              <p><?php echo $row['Disc'];?></p></div>
			  <h5 class="mb-3">Solution : </h5>
			  <p><?php echo             $row['Sol'];?></p>
			  <div class="two-mid-button d-flex justify-content-center mt-lg-5 mt-md-4 mt-sm-4 mt-3">
            <div class="read-buttn ">
              <a href="resolve.php?id=<?php echo $row['Cid'];?>" class=" scroll">Re-Solve</a>
            </div>
            
          </div>
			  </div>
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
	</html>