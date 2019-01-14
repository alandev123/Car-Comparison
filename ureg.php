
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup</title>
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
<body class="animsition"> <!-- -->
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html">
						<img src="images/icons/logo.PNG" style="border-radius: 30%">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.php">Home</a>
								</li>

								<li>
									<a href="viewcar.php">Car</a>
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

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<!--a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a-->

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>



		<div class="container">
			<h3 class="tit7 t-center p-b-62 p-t-105">
				Signup as a User
			</h3> or <a href="manureg.php" >click here to signup as a manufacture</a></h3>

			<form id="regForm" action="uregaction.php" method="post" class="wrap-form-reservation size22 m-l-r-auto" >

				<center>
					<div class="row">
						<div class="col-md-5 text-right pt-3"><b>Name</b></div>
						<div class="col-md-4" style="display: inline-block">
						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
						<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name" id="name" required>
						</div>
						</div>
					</div>
					<br/>

					<!--    ......     -->

					<div class="row">
						<div class="col-md-5 text-right pt-3"><b>State</b></div>
						<div class="col-md-4" style="display: inline-block">
						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
						<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="state" placeholder="State" id="state" required>
						</div>
						</div>
					</div>
					<br/>
					<!--    ......     -->

					<div class="row">
						<div class="col-md-5 text-right pt-3"><b>City</b></div>
						<div class="col-md-4" style="display: inline-block">
						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
						<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="city" placeholder="City" id="city" required>
						</div>
						</div>
					</div>
					<br/>
					<!--    ......     -->

					<div class="row">
						<div class="col-md-5 text-right pt-3"><b>Contact number</b></div>
						<div class="col-md-4" style="display: inline-block" style>
						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
						<input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="contact" placeholder="Contact Number" id="contact" pattern="[6-9]{1}[0-9]{9}" required title="enter a valid mobile number">
						</div>
						</div>
					</div>
					<br/>
					<!--    ......     -->

					<div class="row">
						<div class="col-md-5 text-right pt-3"><b>E-mail id</b></div>
						<div class="col-md-4" style="display: inline-block">
						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
						<input class="bo-rad-10 sizefull txt10 p-l-20" type="email" name="email" placeholder="Email" id="email" required>
						</div>
						</div>
					</div>
					<br/>
					<!--    ......     -->

					<div class="row">
						<div class="col-md-5 text-right pt-3"><b>Username</b></div>
						<div class="col-md-4" style="display: inline-block">
						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
						<input class="bo-rad-10 sizefull txt10 p-l-20" type="username" name="username" placeholder="Username" id="username" required>
						</div>
						</div>
					</div>
					<br/>
					<!--    ......     -->

					<div class="row">
						<div class="col-md-5 text-right pt-3"><b>Password</b></div>
						<div class="col-md-4" style="display: inline-block">
						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
						<input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="password" placeholder="Password" id="password"  pattern=".{8,}"required title="minimum 8 characters in password">
						</div>
						</div>
					</div>
					<br/>
					<!--    ......     -->

					<div class="row">
						<div class="col-md-5 text-right pt-3"><b>Confirm Password</b></div>
						<div class="col-md-4" style="display: inline-block">
						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
						<input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="confirm" placeholder="Confirm Password" id="confirm" required>
						</div>
						</div>
					</div>
					<!--    ......     -->

					<div class="wrap-btn-booking flex-c-m m-t-13">
					<input type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
				</div>
				<br/>
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
	<!--/section-->



	<footer class="bg1">

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
	<script src="js/main.js"></script>

	<script type="text/javascript">
	$("#regForm").on("submit", function(e)
	{
		e.preventDefault();
<?php /*?>		if(document.getElementById('name').value=="")
		{
			alert("Enter your name");
			return false;
		}
		if(!isNaN(document.getElementById('name').value))
		{
		   	alert("Check your name");
			return false;
		}

				if(document.getElementById('state').value=="")
		{
			alert("enter your state ");
			return false;
		}
		if(!isNaN(document.getElementById('state').value))
		{
		   	alert("Check state spelling");
			return false;
		}

				if(document.getElementById('city').value=="")
		{
			alert("Enter your city");
			return false;
		}


		if(document.getElementById('email').value=="")
			{
				alert("enter your email id");
				return false;
			}
		if ((document.getElementById('contact').value.length<10) || (document.getElementById('contact').value.length>12))
			{
				alert("enter a valid contact number");
				return false;
			}
		if(document.getElementById('username').value=="")
		{
			alert("Enter a username");
			return false;
		}

		if(document.getElementById('password').value=="")
		{
			alert("Enter a password");
			return false;
		}

		if(document.getElementById('confirm').value=="")
		{
			alert("pls confirm your password");
			return false;
		}
		<?php */?>
		if(document.getElementById('password').value != document.getElementById('confirm').value)
		{
			alert("Passwords are not matching");
			return false;
		}

		$(this).unbind().submit();
	});
	</script>

</body>
</html>
