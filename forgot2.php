<?php

include("dbconnect.php");


	$user=$_POST['u_name'];
	$sql="select * from login_tb where username='$user'";
	$result=mysql_query($sql,$con);
	$rowcount=mysql_num_rows($result);

	if($rowcount)
{

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="aboutus1.php">
						<img src="images/icons/logo.PNG" style="border-radius:30px">
<!--							<img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
-->						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.php">Home</a>
								</li>

								<li>
									<a href="viewcar.php">Cars</a>
								</li>

								<li>
									<a href="cmpr.php">Compare Cars</a>
								</li>

								<li>
									<a href="gallery.php">Gallery</a>
								</li>

								<li>
									<a href="aboutus1.php">About</a>
								</li>



								<li>
									<a href="login.php">Login</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>-->
				</div>
			</div>
		</div>
	</header>


	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(pics/bmw1.jpg);">




		<div class="container">
			<!--h3 class="tit7 t-center p-b-62 p-t-10">
				Login to Wheelei
			</h3-->
<h2 class="tit6 t-center">
			Login
			<br/>
		</h2>

			<form action="forgotaction.php" method="post" class="wrap-form-reservation size22 m-l-r-auto" autocomplete="off">

				<center>
					<div class="col-md-4">


						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="person" value="<?php echo $user ?>" disabled>
						</div>
					</div>


					<div class="col-md-4">
						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="pass" placeholder="Password" required>

						</div>
					</div>
          <div class="col-md-4">
            <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
              <input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="confirm" placeholder="Confirm Password" required>

            </div>
          </div>


				<div class="wrap-btn-booking flex-c-m m-t-13">

					<input type="submit" value="Change" class="btn3 flex-c-m size36 txt11 trans-0-4">


				</div>

											<div style="color: red; font-size:18px"><?php

								if(isset($_GET['succes']))
								{
									echo($_GET['succes']);
								}
							?>
							</div>
				<br/>





				</center>
			</form>

			<div class="row p-t-135">
				<div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/map-icon.png" alt="IMG-ICON">
						</div>

						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Location
							</span>

							<span class="txt23 size38">
								AJCE Kanjirappally
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/phone-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Call Us
							</span>

							<span class="txt23 size38">
								(+91) 7561008226
							</span>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contact Us
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							AJCE Kanjirappally
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+91) 7561008226
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							alandev123@gmail.com
						</li>
					</ul>

					<!-- - -->

				</div>



				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Gallery
					</h4>

					<!-- Gallery footer -->


										<div class="wrap-gallery-footer flex-w">
						<a class="item-gallery-footer wrap-pic-w" href="pics/chevi2.jpg" data-lightbox="gallery-footer">
							<img src="pics/chevi2.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="pics/nissan2.jpg" data-lightbox="gallery-footer">
							<img src="pics/nissan2.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="pics/porche.jpg" data-lightbox="gallery-footer">
							<img src="pics/porche.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="pics/suv.JPG" data-lightbox="gallery-footer">
							<img src="pics/suv.JPG" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="pics/08.jpg" data-lightbox="gallery-footer">
							<img src="pics/08.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="pics/07.jpg" data-lightbox="gallery-footer">
							<img src="pics/07.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="pics/06.jpg" data-lightbox="gallery-footer">
							<img src="pics/06.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="pics/05.jpg" data-lightbox="gallery-footer">
							<img src="pics/05.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="pics/04.jpg" data-lightbox="gallery-footer">
							<img src="pics/04.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="pics/03.png" data-lightbox="gallery-footer">
							<img src="pics/03.png" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="pics/02.jpg" data-lightbox="gallery-footer">
							<img src="pics/02.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="pics/1.jpeg" data-lightbox="gallery-footer">
							<img src="pics/1.jpeg" alt="GALLERY">
						</a>
					</div>

				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<!--a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a-->
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 Alan Devasia<i class="fa fa-heart"></i>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js">
	$("#forgotform").on("submit", function(e)
	{

		if(document.getElementById('pass').value != document.getElementById('confirm').value)
		{
			alert("Passwords are not matching");
			return false;
		}

		$(this).unbind().submit();
	});</script>

</body>
</html>
<?php
}
else{
	header("location: forgot.php?eror=invalid username");
}



?>
