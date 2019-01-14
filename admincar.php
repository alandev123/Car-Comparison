<?php
session_start();
include("dbconnect.php");
	$uname=$_SESSION['username'];
	$upass=$_SESSION['password'];
	$utype=$_SESSION['utype'];
	$sql="SELECT * FROM  `login_tb` WHERE username =  '$uname'AND PASSWORD =  '$upass'";
	$result=mysql_query($sql,$con);
	$rowcount=mysql_num_rows($result);
	if($rowcount !=0 && $utype=='admin')
	{

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Administrator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


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



<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->

 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Wheelie<span class="dashboard_text">Admin Area</span></a></h1>
          </div>
		  <?php
						$tu3="select carid from carname_tb";
						$result3=mysql_query($tu3,$con);
						$rowcount3=mysql_num_rows($result3);
											?>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="homeadmin.php">
                <i class="fa fa-dashboard"></i> <span>Home</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="aproveman.php">
                <i class="fa fa-laptop"></i>
                <span>Approve</span>
				</a>
                <!--i class="fa fa-angle-left pull-right"></i>
                
                <ul class="treeview-menu">
                  <li><a href="grids.html"><i class="fa fa-angle-right"></i> Grids</a></li>
                  <li><a href="media.html"><i class="fa fa-angle-right"></i> Media Css</a></li>
                </ul-->
              </li>
              <!--li class="treeview">
                <a href="charts.html">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <span class="label label-primary pull-right">new</span>
                </a>
              </li-->
              <li class="treeview">
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>View</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="Viewman.php"><i class="fa fa-angle-right"></i> Manufactures</a></li>
                  <li><a href="viewuser.php"><i class="fa fa-angle-right"></i>Users</a></li>
                  <li><a href="admincar.php"><i class="fa fa-angle-right"></i> Cars</a></li>
                  
                </ul>
              </li>
			  <li>
                <a href="admincompare.php">
                <i class="fa fa-th"></i> <span>Compare Cars<span>
                <small class="label pull-right label-info"><?php echo $rowcount3 ?></small>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>Feedbacks</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="viewmfeedback.php"><i class="fa fa-angle-right"></i> Manufacture</a></li>
                  <li><a href="aprovalmsg.php"><i class="fa fa-angle-right"></i> Aproval Messages</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="err.php">
                <i class="fa fa-table"></i> <span>Logout</span>
                <!--i class="fa fa-angle-left pull-right"></i-->
                </a>
                <!--ul class="treeview-menu">
                  <li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
                </ul-->
              </li>
              <li class="treeview">
                <a href="adminnot.php">
                <i class="fa fa-envelope"></i> <span>Send Notification </span>
                <!--i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
                <ul class="treeview-menu">
                  <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
                  <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
                </ul-->
              </li>
              
             
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Feedbacks and Messaages</h3>
									</div>
								</li>
								<li><a href="viewmfeedback.php">
								   <div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Feedbacks from Company</p>

									</div>
								   <div class="clearfix"></div>
								</a></li>
								
								
								
								<!--li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div>
								</li-->
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="aprovalmsg.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Aproval Messages</h3>
									</div>
								</li>
								<li><a href="aprovalmsg.php">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Click Here</p>
									
									</div>
								  <div class="clearfix"></div>
								 </a></li>
								 
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Manufactures</h3>
									</div>
								</li>
								<li><a href="aproveman.php">
									<div class="task-info">
										<span class="task-desc">Approve Pending Registrations</span>
										<div class="clearfix"></div>
									</div>
									
								</a></li>
								<li><a href="viewman.php">
									<div class="task-info">
										<span class="task-desc">View Manufactures</span>
									   <div class="clearfix"></div>
									</div>

								</a></li>


								
							</ul>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">


				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->

				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
									<div class="user-name">
										<p>Admin Name</p>
										<span><?php echo $uname ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<!--li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li-->
								<li> <a href="err.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">

			
			<form action="#" class="wrap-form-booking" method="post" enctype="multipart/form-data">

						<div class="row">
							<div class="col-md-4">
								<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
								</div>
								<!-- name -->
								<br/>
								<div>
								<span class="txt9">
									Select Company
								</span>

							</div>
							<br/>
							<br/>
							<div>
								<span class="txt9">
								Select car
								</span>


								</div>
								<br/>
								<br/>
								<div>
								<span class="txt9">
									Select Varient
								</span>
								</div>
								<br/>

								<br/>
								<!-- varient -->
								<div>
								<span class="txt9">
									Type
								</span>
								</div>
								<br/>
								<br/>
								<br/>
								<!-- fuel -->
								<div>
								<span class="txt9">
									Fuel Type
								</span>
								</div>
								<br/>
								<br/>
								<br/>


								<!-- cc -->
								<div>
								<span class="txt9">
									Displacement
								</span>
								</div>
								<br/>
								<br/>
								<br/>
								<div>
								<span class="txt9">
									Transmission
								</span>
								</div>
								<br/>
								<br/>
								<br/>
								<div>
								<span class="txt9">
									Gearbox
								</span>
								</div>
								<br/>
								<br/>
								<br/>



								<div>
								<!-- power -->
								<span class="txt9">
									Max Power
								</span>
								</div>
								<br/>
								
								<br/>

								<div>
								<span class="txt9">
									Max Torque
								</span>
								</div>
								<br/>
								<br/>
								<br/>


								<div>
								<span class="txt9">
									No. of cylinders
								</span>
								</div>
								<br/>
								<br/>
								
								<div>
								<span class="txt9">
									Fuel Capacity
								</span>
								</div>
								<br/>
								<br/>
								<br/>
								<div>
								
								<span class="txt9">
									ARAI Milage
								</span>
							</div>
							<br/>
							<br/>
							<br/>
							<div>
							<span class="txt9">
								Ground clearance
							</span>
						</div>
						<br/>
						
						<br/>
						<div>
						
						<span class="txt9">
							Wheelbase
						</span>
					</div>
					<br/>
					<br/>
					<br/>
					<div>
					<span class="txt9">
					Kerb Weight
					</span>
				</div>
				<br/>
				
				<br/>
				<div>
				<span class="txt9">
					Boot Space
				</span>
			</div>
			<br/>
			<br/>
			<br/>
			<div>
			<span class="txt9">
				Length
			</span>
		</div>
		<br/>
		<br/>
		<br/>	
		<div>
		<span class="txt9">
			Height
		</span>
	</div>
	<br/>
	<br/>
	<div>
	<span class="txt9">
		Width
	</span>
</div>
<br/>
<br/><br/>
<div>
<span class="txt9">
	Tyres
</span>
</div>
<br/>
<br/>
<div>
		<span class="txt9">
			Seat
		</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
				Power window
		</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
			ABS
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			Central Lock
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			All Wheel Drive
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			Alloy Wheel
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			Tubeless Tyres
		</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
			Touch Screen Navigation
		</span>
		</div>
		<br/>
		<br/>
<div>

		<span class="txt9">
			Sun Roof
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			Reverse Camera
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
				Reverse Sensor
			</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
			Fog Light
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			Daytime Running Light
		</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
			Cruise Control
		</span>
		</div>
		<br/>
		<br/>
		<div>
		<span class="txt9">
			Electric ORVM
		</span>
		</div>
		<br/>
		<br/>
<div>
		<span class="txt9">
			Ex - Showroom Price (DEL)
		</span>
		</div>
		<br/>
		<br/>
</div>

							<div class="col-md-6">
									<div id="carimage1" draggable="true" style="margin-left: 90px; background-size: cover;" class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
								</div>
							<div  class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<select  class="bo-rad-10 sizefull txt10 p-l-20" id="selcomp" name="cname"  placeholder="Select company" onChange="getcar(this.value)" >
							<option>
										-- select company --
									</option>
									</select>
								</div>
								

							<div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<select class="bo-rad-10 sizefull txt10 p-l-20" id="selcar" onChange="getvar(this.value)" name="carname" placeholder="Select car" required>
							<option>
										-- select car --
									</option>
								
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


					</form>

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		</div>


	</div>
		</div>
	<!--footer-->
	<div class="footer">
	   <p>&copy;Alan Devasia</p>
	   </div>
    <!--//footer-->
	</div>

	<!-- new added graphs chart js-->

    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>


	<!-- new added graphs chart js-->

	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};


			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->

	<!-- for index page weekly sales java script -->
	<?php /*?><script src="js/SimpleChart.js"></script>
    <script>
        var graphdata1 = {
            linecolor: "#CCA300",
            title: "Monday",
            values: [
            { X: "6:00", Y: 10.00 },
            { X: "7:00", Y: 20.00 },
            { X: "8:00", Y: 40.00 },
            { X: "9:00", Y: 34.00 },
            { X: "10:00", Y: 40.25 },
            { X: "11:00", Y: 28.56 },
            { X: "12:00", Y: 18.57 },
            { X: "13:00", Y: 34.00 },
            { X: "14:00", Y: 40.89 },
            { X: "15:00", Y: 12.57 },
            { X: "16:00", Y: 28.24 },
            { X: "17:00", Y: 18.00 },
            { X: "18:00", Y: 34.24 },
            { X: "19:00", Y: 40.58 },
            { X: "20:00", Y: 12.54 },
            { X: "21:00", Y: 28.00 },
            { X: "22:00", Y: 18.00 },
            { X: "23:00", Y: 34.89 },
            { X: "0:00", Y: 40.26 },
            { X: "1:00", Y: 28.89 },
            { X: "2:00", Y: 18.87 },
            { X: "3:00", Y: 34.00 },
            { X: "4:00", Y: 40.00 }
            ]
        };
        var graphdata2 = {
            linecolor: "#00CC66",
            title: "Tuesday",
            values: [
              { X: "6:00", Y: 100.00 },
            { X: "7:00", Y: 120.00 },
            { X: "8:00", Y: 140.00 },
            { X: "9:00", Y: 134.00 },
            { X: "10:00", Y: 140.25 },
            { X: "11:00", Y: 128.56 },
            { X: "12:00", Y: 118.57 },
            { X: "13:00", Y: 134.00 },
            { X: "14:00", Y: 140.89 },
            { X: "15:00", Y: 112.57 },
            { X: "16:00", Y: 128.24 },
            { X: "17:00", Y: 118.00 },
            { X: "18:00", Y: 134.24 },
            { X: "19:00", Y: 140.58 },
            { X: "20:00", Y: 112.54 },
            { X: "21:00", Y: 128.00 },
            { X: "22:00", Y: 118.00 },
            { X: "23:00", Y: 134.89 },
            { X: "0:00", Y: 140.26 },
            { X: "1:00", Y: 128.89 },
            { X: "2:00", Y: 118.87 },
            { X: "3:00", Y: 134.00 },
            { X: "4:00", Y: 180.00 }
            ]
        };
        var graphdata3 = {
            linecolor: "#FF99CC",
            title: "Wednesday",
            values: [
              { X: "6:00", Y: 230.00 },
            { X: "7:00", Y: 210.00 },
            { X: "8:00", Y: 214.00 },
            { X: "9:00", Y: 234.00 },
            { X: "10:00", Y: 247.25 },
            { X: "11:00", Y: 218.56 },
            { X: "12:00", Y: 268.57 },
            { X: "13:00", Y: 274.00 },
            { X: "14:00", Y: 280.89 },
            { X: "15:00", Y: 242.57 },
            { X: "16:00", Y: 298.24 },
            { X: "17:00", Y: 208.00 },
            { X: "18:00", Y: 214.24 },
            { X: "19:00", Y: 214.58 },
            { X: "20:00", Y: 211.54 },
            { X: "21:00", Y: 248.00 },
            { X: "22:00", Y: 258.00 },
            { X: "23:00", Y: 234.89 },
            { X: "0:00", Y: 210.26 },
            { X: "1:00", Y: 248.89 },
            { X: "2:00", Y: 238.87 },
            { X: "3:00", Y: 264.00 },
            { X: "4:00", Y: 270.00 }
            ]
        };
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [
              { X: "6:00", Y: 300.00 },
            { X: "7:00", Y: 410.98 },
            { X: "8:00", Y: 310.00 },
            { X: "9:00", Y: 314.00 },
            { X: "10:00", Y: 310.25 },
            { X: "11:00", Y: 318.56 },
            { X: "12:00", Y: 318.57 },
            { X: "13:00", Y: 314.00 },
            { X: "14:00", Y: 310.89 },
            { X: "15:00", Y: 512.57 },
            { X: "16:00", Y: 318.24 },
            { X: "17:00", Y: 318.00 },
            { X: "18:00", Y: 314.24 },
            { X: "19:00", Y: 310.58 },
            { X: "20:00", Y: 312.54 },
            { X: "21:00", Y: 318.00 },
            { X: "22:00", Y: 318.00 },
            { X: "23:00", Y: 314.89 },
            { X: "0:00", Y: 310.26 },
            { X: "1:00", Y: 318.89 },
            { X: "2:00", Y: 518.87 },
            { X: "3:00", Y: 314.00 },
            { X: "4:00", Y: 310.00 }
            ]
        };
        var Piedata = {
            linecolor: "Random",
            title: "Profit",
            values: [
              { X: "Monday", Y: 50.00 },
            { X: "Tuesday", Y: 110.98 },
            { X: "Wednesday", Y: 70.00 },
            { X: "Thursday", Y: 204.00 },
            { X: "Friday", Y: 80.25 },
            { X: "Saturday", Y: 38.56 },
            { X: "Sunday", Y: 98.57 }
            ]
        };
        $(function () {
            $("#Bargraph").SimpleChart({
                ChartType: "Bar",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#sltchartype").on('change', function () {
                $("#Bargraph").SimpleChart('ChartType', $(this).val());
                $("#Bargraph").SimpleChart('reload', 'true');
            });
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Linegraph").SimpleChart({
                ChartType: "Line",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Areagraph").SimpleChart({
                ChartType: "Area",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Scatterredgraph").SimpleChart({
                ChartType: "Scattered",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Piegraph").SimpleChart({
                ChartType: "Pie",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                showpielables: true,
                data: [Piedata],
                legendsize: "250",
                legendposition: 'right',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#Stackedbargraph").SimpleChart({
                ChartType: "Stacked",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#StackedHybridbargraph").SimpleChart({
                ChartType: "StackedHybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });

    </script><?php */?>
	<!-- //for index page weekly sales java script -->


	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->

</body>
</html>
<?php
	}
	else
	{
		header("location:err.php");
	}
?>
