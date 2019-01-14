<?php
session_start();
include("dbconnect.php");
$uname=$_SESSION['username'];
$upass=$_SESSION['password'];
$utype=$_SESSION['utype'];
$sql="SELECT * FROM  `login_tb` WHERE username =  '$uname' AND PASSWORD =  '$upass'";

$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
//$sql1="select * from mreg_tb where username ='$uname'";
//	$ccn=mysql_query($sql1,$con);
//$rwcount=mysql_num_rows($ccn);
if($rowcount !=0 && $utype=='company')
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Cars</title>
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
<body  class="animsition"> <!-- -->
<div style="background-color: #B4B4A4">
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="mhome.php">
						<img src="images/icons/logo.PNG" style="border-radius: 30%">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="mhome.php">Home</a>
								</li>

								<li>
									<a href="cars.php">Add Cars</a>
								</li>

								<li>
									<a href="carspec.php">Car Details</a>
								</li>

								<li>
									<a href="owncar.php">My Cars</a>
								</li>

								<li>
									<a href="mvcar.php">All cars</a>
								</li>

								<li>
									<a href="mfeedback.php">Feedback</a>
								</li>

							
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="mprofile.php"><i class="fa fa-user">&nbsp profile</i></a>
						<!--a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a-->

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="mhome.php" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="carspec.php" class="txt19">Cars</a>
			</li>

			<li class="t-center m-b-13">
				<a href="owncar.php" class="txt19">my cars</a>
			</li>

			<li class="t-center m-b-13">
				<a href="mvcar.php" class="txt19">All cars</a>
			</li>

			<li class="t-center m-b-13">
				<a href="mfeedback.php" class="txt19">feedback</a>
			</li>

			<li class="t-center m-b-33">
				<a href="err.php" class="txt19">Logout</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="mcompare.php" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
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



		<div class="container">
			<h3 class="tit7 t-center p-b-62 p-t-105">
				Add Your Car Details </h3>

	<!-- Booking -->
	<!--section class="section-booking bg1-pattern p-t-100 p-b-110"-->
		<div class="container">
			<div class="row">
				<div class="col-lg-06 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Car Details
						</span>

						<br/>
						<br/>
						<br/>
						<br/>
					</div>

					<form action="carsaction.php" class="wrap-form-booking" method="post" enctype="multipart/form-data">

						<div class="row">
							<div class="col-md-12">

								<!-- name -->
								<span class="txt9">
									Car Name
								</span>

									<div class="wrap-inputvarient size12 bo2 bo-rad-10 m-t-3 m-b-23">

									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="carname" placeholder="Car Name" required>
								</div>









						<div class="wrap-btn flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" name="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Add Car
							</button>
						</div>
				</div>
					</form>

				</div>


			</div>
		</div>
	<!--/section-->

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
	<!--/section-->



	<footer class="bg1">

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script type="text/javascript">
	$("#mregForm").on("submit", function(e)
	{

		if(document.getElementById('password').value != document.getElementById('confirm').value)
		{
			alert("Passwords are not matching");
			return false;
		}

		$(this).unbind().submit();
	});
	</script>
</div>
</body>
</html>
<?php
}
else
{
header("location:err.php");
}
?>
