<?php
session_start();
include("dbconnect.php");
	$uname=$_SESSION['username'];
	$upass=$_SESSION['password'];
	$utype=$_SESSION['utype'];
	$sql="SELECT * FROM  `login_tb` WHERE username =  '$uname'AND PASSWORD =  '$upass'";
	$result=mysql_query($sql,$con);
	$rowcount=mysql_num_rows($result);
	if($rowcount !=0 && $utype=='user')
	{

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/sastest.js"></script>
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
						<a href="index.html">
							<img src="images/icons/logo.png" style="border-radius: 30%" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="uhome.php">Home</a>
								</li>

								<li>
									<a href="uviewcar.php">Cars</a>
								</li>

								<li>
									<a href="ucompare.php">Compare Cars</a>
								</li>

								<li>
									<a href="#">Gallery</a>
								</li>

								<li>
									<a href="aboutus.php">About</a>
								</li>



								<li>
									<a href="err.php">Logout</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="uprofile.php"><i class="fa fa-user" aria-hidden="true"> &nbsp Profile</i></a>
						<!--a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a-->

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="uprofile.php" class="fa fa-user">&nbsp Profile</a>
			</li>

			<li class="t-center m-b-13">
				<a href="uviewcar.php" class="txt19">Cars</a>
			</li>

			<li class="t-center m-b-13">
				<a href="#" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="aboutus.php" class="txt19">About</a>
			</li>



			<li class="t-center m-b-33">
				<a href="err.php" class="txt19">Logout</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="ucompare.php" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Compare cars
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="pics/1.jpeg" data-lightbox="gallery-footer">
					<img src="pics/1.jpeg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="pics/02.jpg" data-lightbox="gallery-footer">
					<img src="pics/02.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="pics/03.png" data-lightbox="gallery-footer">
					<img src="pics/03.png" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="pics/04.jpg" data-lightbox="gallery-footer">
					<img src="pics/04.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="pics/05.jpg" data-lightbox="gallery-footer">
					<img src="pics/05.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="pics/06.jpg" data-lightbox="gallery-footer">
					<img src="pics/06.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="pics/07.jpg" data-lightbox="gallery-footer">
					<img src="pics/07.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="pics/08.jpg" data-lightbox="gallery-footer">
					<img src="pics/08.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="pics/bPWivC.jpg" data-lightbox="gallery-footer">
					<img src="pics/bPWivC.jpg" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>



	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(pics/chevi2.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							<?php
								$nme=mysql_query("select name from ureg_tb where username='$uname'",$con);
								$row=mysql_fetch_array($nme);
								$print=$row['name'];
							?>
							Welcome <?php echo $print ?>
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Find Yours
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
							<a href="uviewcar.php" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Have a Look
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/bmw1.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Welcome <?php echo $print ?>
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Find Yours
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
							<!-- Button1 -->
							<a href="uviewcar.php" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Have a Look
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(pics/car1.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Welcome <?php echo $print ?>
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							Find Yours
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<!-- Button1 -->
							<a href="uviewcar.php" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Have a Look
							</a>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							Wheelie "Compare your Dream Car"
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							About us
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Wheelie is initiated to easily compare cars that you wish to buy. :)p
						</p>

						<a href="about.html" class="txt4">
							Our Story
							<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
						</a>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="pics/bmw2.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Intro -->
	<section class="section-intro">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(pics/porche.jpg);">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Your Cars
			</h3>
		</div>

		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="row">
					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="pics/suv.JPG" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									SUV
								</h4></a>

								<p class="m-b-20">
									Sports Utility Vehicles
								</p>

								<a href="#" class="txt4">
									Learn More
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="pics/marazzo.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									MUV
								</h4></a>

								<p class="m-b-20">
									Multi Utility Vehicles
								</p>

								<a href="#" class="txt4">
									Learn More
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="pics/cuv.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									CUV
								</h4></a>

								<p class="m-b-20">
									Crossover Utility Vehicles
								</p>

								<a href="#" class="txt4">
									Learn More
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- Our menu -->



	<!-- Event -->





	<!-- Video -->
	<section class="section-video parallax100" style="background-image: url(pics/marazzo.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Here
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Editors Choice
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
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

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="pics/marazzo.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/watch?v=S4aw2_8ToRA" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>



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
	<script src="js/main.js"></script>

</body>
</html>
<?php
	}
	else
	{
		header("location:err.php");
	}
?>
