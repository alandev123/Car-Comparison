<?php
session_start();
include("dbconnect.php");
	$uname=$_SESSION['username'];
	$upass=$_SESSION['password'];
	$utype=$_SESSION['utype'];
	$sql="SELECT * FROM  `login_tb` WHERE username =  '$uname'AND PASSWORD =  '$upass'";
	$result=mysql_query($sql,$con);
	$rowcount=mysql_num_rows($result);
	if($rowcount !=0 && $utype=='company')
	{

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Compare</title>
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
									<a href="mcompare.php">Compare</a>
								</li>
								<li>
									<a href="mfeedback.php">Feedback</a>
								</li>


							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="mprofile.php"><i class="fa fa-user" aria-hidden="true"> &nbsp Profile</i></a>


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
				<a href="mcompare.php" class="txt19">Compare</a>
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
				Select Your Cars </h3>

	<!-- Booking -->
	<!--section class="section-booking bg1-pattern p-t-100 p-b-110"-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<!--div class="t-center">
						<span class="tit2 t-center">

						</span>

						<br/>
						<br/>
						<br/>
						<br/>
					</div-->

					<form action="#" class="wrap-form-booking" method="post" enctype="multipart/form-data">

						<div class="row">
							<div class="col-md-4">
									<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
									</div>
								<!-- name -->
<br/>
								<div>

								<span class="txt9">
									<b>Select Company</b>
								</span>

							</div>
							<br/>
							<br/>
							<div>
								<span class="txt9">
								<b>Select car</b>
								</span>


								</div>
								<br/>
								<br/>
								<div>
								<span class="txt9">
								<b>	Select Varient</b>
								</span>
								</div>
								<br/>

								<br/>
								<!-- varient -->
								<div>
								<span class="txt9">
									<b>Type</b>
								</span>
								</div>
								<br/>
								<br/>
								<!-- fuel -->
								<div>
								<span class="txt9">
									<b>Fuel Type</b>
								</span>
								</div>
								<br/>
								<br/>


								<!-- cc -->
								<div>
								<span class="txt9">
									<b>Displacement</b>
								</span>
								</div>
								<br/>
								<br/>
								<div>
								<span class="txt9">
									<b>Transmission</b>
								</span>
								</div>
								<br/>
								<br/>
								<div>
								<span class="txt9">
									<b>Gearbox</b>
								</span>
								</div>
								<br/>
								<br/>



								<div>
								<!-- power -->
								<span class="txt9">
									<b>Max Power</b>
								</span>
								</div>
								<br/>
								<br/>

								<div>
								<span class="txt9">
									<b>Max Torque</b>
								</span>
								</div>
								<br/>
								<br/>


								<div>
								<span class="txt9">
									<b>No. of cylinders</b>
								</span>
								</div>
								<br/>
								<br/>
								<div>
								<span class="txt9">
									<b>Fuel Capacity</b>
								</span>
								</div>
								<br/>
								<br/>

								<div>
								<span class="txt9">
									<b>ARAI Milage</b>
								</span>
							</div>
							<br/>
							<br/>
							<div>
							<span class="txt9">
								<b>Ground clearance</b>
							</span>
						</div>
						<br/>
						<br/>
						<div>
						<span class="txt9">
							<b>Wheelbase</b>
						</span>
					</div>
					<br/>
					<br/>
					<div>
					<span class="txt9">
					<b>Kerb Weight</b>
					</span>
				</div>
				<br/>
				<br/>
				<div>
				<span class="txt9">
					<b>Boot Space</b>
				</span>
			</div>
			<br/>
			<br/>
			<div>
			<span class="txt9">
				<b>Length</b>
			</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
			<b>Height</b>
		</span>
	</div>
	<br/>
	<br/>
	<div>
	<span class="txt9">
		<b>Width</b>
	</span>
</div>
<br/>
<br/><br/>
<div>
<span class="txt9">
	<b>Tyres</b>
</span>
</div>
<br/>
<br/>
<div>
		<span class="txt9">
			<b>Seat</b>
		</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
			<b>	Power window</b>
		</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
		<b>	ABS</b>
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			<b>Central Lock</b>
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			<b>All Wheel Drive</b>
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			<b>Alloy Wheel</b>
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			<b>Tubeless Tyres</b>
		</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
			<b>Touch Screen Navigation</b>
		</span>
		</div>
		<br/>
		<br/>
<div>

		<span class="txt9">
			<b>Sun Roof</b>
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			<b>Reverse Camera</b>
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
				<b>Reverse Sensor</b>
			</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
			<b>Fog Light</b>
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			<b>Daytime Running Light</b>
		</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
			<b>Cruise Control</b>
		</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
			<b>Electric ORVM</b>
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			<b>Ex - Showroom Price (DEL)</b>
		</span>
		</div>
		<br/>
		<br/>
</div>

							<div class="col-md-4">
									<div id="carimage1" draggable="true" style="margin-left: 90px; background-size: cover; " class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
									</div>
							<div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<select class="bo-rad-10 sizefull txt10 p-l-20" id="selcomp" name="cname"  placeholder="Select company" onChange="getcar(this.value)" required>
							<option>
										-- select company --
									</option>
									</select>
								</div>
								<?php /*?><?php
									$sel = mysql_query("select * from mreg_tb where status='approved' ORDER BY `cname` ASC",$con);
									while($row=mysql_fetch_array($sel)){
									?>

									<option value="<?php echo $row['username']; ?>">
										<?php echo $row['cname']; ?>
									</option>
								<?php } ?><?php */?>

							<div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<select class="bo-rad-10 sizefull txt10 p-l-20" id="selcar" onChange="getvar(this.value)" name="carname" placeholder="Select car" required>
							<option>
										-- select car --
									</option>
								<?php /*?><?php
									$selcar = mysql_query("select * from car_tb",$con);
									while($row=mysql_fetch_array($selcar)){
									?>

									<option value="<?php echo $row['cname']; ?>">
										<?php echo $row['carname']; ?>
									</option>
								<?php } ?><?php */?>
									</select>
								</div>


							<div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<select class="bo-rad-10 sizefull txt10 p-l-20" id="selvar" name="carname" onChange="getdet(this.value)" placeholder="Select car" required>
							<option>
										-- select varient --
									</option>
								<?php /*?><?php
									$selcar = mysql_query("select * from car_tb",$con);
									while($row=mysql_fetch_array($selcar)){
									?>

									<option value="<?php echo $row['cid']; ?>">
										<?php echo $row['varient']; ?>
									</option>
								<?php } ?><?php */?>
									</select>
								</div>


								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="type" id="type">
								</div>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="fuel" id="fuel">
								</div>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="cc" id="cc">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="transm" id="transm">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="gear" id="gear">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="power" id="power">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="torque" id="torque">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="cylinder" id="cylinder">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="fcap" id="fcap">
								</div>





								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="milage" id="milage">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="ground" id="ground">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="wheelbase" id="wheelbase">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="kweight" id="kweight">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="boot" id="boot">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="length" id="length">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="height" id="height">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="width" id="width">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="tyres" id="tyres">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="seat" id="seat">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="pw" id="pw">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="abs" id="abs">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="cl" id="cl">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="awd" id="awd">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="alloy" id="alloy">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="tube" id="tube">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="tsn" id="tsn">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="sun" id="sun">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="rc" id="rc">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="rs" id="rs">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="fl" id="fl">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="dtrl" id="dtrl">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="cruise" id="cruise">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="orvm" id="orvm">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="cost" id="cost">
								</div>

</div>

					<div class="col-md-4">
						<div id="carimage2" draggable="true" style="margin-left: 90px; background-size: cover;" class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						</div>
								<div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<select class="bo-rad-10 sizefull txt10 p-l-20" id="selcomp1" name="cname1"  placeholder="Select company" onChange="getcar1(this.value)" required>
							<option>
										-- select company --
									</option>
									</select>
								</div>
								<?php /*?><?php
									$sel = mysql_query("select * from mreg_tb where status='approved' ORDER BY `cname` ASC",$con);
									while($row=mysql_fetch_array($sel)){
									?>

									<option value="<?php echo $row['username']; ?>">
										<?php echo $row['cname']; ?>
									</option>
								<?php } ?><?php */?>

							<div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<select class="bo-rad-10 sizefull txt10 p-l-20" id="selcar1" onChange="getvar1(this.value)" name="carname1" placeholder="Select car" required>
							<option>
										-- select car --
									</option>
								<?php /*?><?php
									$selcar = mysql_query("select * from car_tb",$con);
									while($row=mysql_fetch_array($selcar)){
									?>

									<option value="<?php echo $row['cname']; ?>">
										<?php echo $row['carname']; ?>
									</option>
								<?php } ?><?php */?>
									</select>
								</div>


							<div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<select class="bo-rad-10 sizefull txt10 p-l-20" id="selvar1" name="carname1" onChange="getdet1(this.value)" placeholder="Select car" required>
							<option>
										-- select varient --
									</option>
								<?php /*?><?php
									$selcar = mysql_query("select * from car_tb",$con);
									while($row=mysql_fetch_array($selcar)){
									?>

									<option value="<?php echo $row['cid']; ?>">
										<?php echo $row['varient']; ?>
									</option>
								<?php } ?><?php */?>
									</select>
								</div>


								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="type1" id="type1">
								</div>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="fuel1" id="fuel1">
								</div>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="cc1" id="cc1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="transm1" id="transm1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="gear1" id="gear1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="power1" id="power1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="torque1" id="torque1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="cylinder1" id="cylinder1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="fcap1" id="fcap1">
								</div>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="milage1" id="milage1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="ground1" id="ground1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="wheelbase1" id="wheelbase1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="kweight1" id="kweight1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="boot1" id="boot1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="length1" id="length1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="height1" id="height1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="width1" id="width1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="tyres1" id="tyres1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="seat1" id="seat1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="pw1" id="pw1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="abs1" id="abs1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="cl1" id="cl1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="awd1" id="awd1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="alloy1" id="alloy1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="tube1" id="tube1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="tsn1" id="tsn1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="sun1" id="sun1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="rc1" id="rc1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="rs1" id="rs1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="fl1" id="fl1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="dtrl1" id="dtrl1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="cruise1" id="cruise1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="orvm1" id="orvm1">
								</div>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input disabled class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="cost1" id="cost1">
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
