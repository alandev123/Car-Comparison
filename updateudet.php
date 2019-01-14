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
	<title>Profile</title>
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
	<div style="background-color: #B4B4A4">

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

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div>
<div >
  <div class="container">
    <div class="row">
      <div class="col-lg-12 p-b-30">

  <form action="updateuser.php" class="wrap-form-booking" method="post" enctype="multipart/form-data">

    <div class="row">
      <div class="col-md-4">

<?php

//$uname=$_SESSION('username');

$prof=mysql_query("SELECT * from `ureg_tb` WHERE username='$uname'",$con);
$row=mysql_fetch_array($prof);
$name=$row['name'];
$state=$row['state'];
$city=$row['city'];
$contact=$row['contact'];
$email=$row['email'];
$username=$row['username'];
$password=$row['password'];

?>



  <span class="txt9">
    Name
  </span>
  <div class="wrap-inputvarient size12 bo2 bo-rad-10 m-t-3 m-b-23">

    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" id="name" value="<?php echo $name ?>" >
  </div>
  <!-- fuel -->
  <span class="txt9">
    State
  </span>

  <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="state" id="state" value="<?php echo $state ?>" >
  </div>

  <!-- cc -->
  <span class="txt9">
    City
  </span>
  <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="city" id="city" value="<?php echo $city ?>" >
  </div>

  <span class="txt9">
  Contact
  </span>

  <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="contact" id="contact" value="<?php echo $contact ?>" >
  </div>
  <span class="txt9">
    Email
  </span>

  <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" id="email" value="<?php echo $email ?>">
  </div>
</div>
  <div class="col-md-4">
  <!-- power -->
  <span class="txt9">
    Username
  </span>

  <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="username" id="username" value="<?php echo $username ?>" disabled >
  </div>

  <span class="txt9">
    password
  </span>

  <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="password" id="password" value="<?php echo $password ?>" >
  </div>
  <div class="wrap-btn flex-c-m m-t-6">
    <!-- Button3 -->
    <button type="submit" name="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
      Update
    </button>
  </div>

</div>
</form>
</div>
</div>
</div>



</div>
</div>
</div>





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
