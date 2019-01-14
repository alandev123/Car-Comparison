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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
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


								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div>
								</li>
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
		</div><!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		
        	</div>
        	<div class="col-md-3 widget widget1">

        	</div>
        	<div class="col-md-3 widget widget1">
  
        	</div>
        	<div class="col-md-3 widget widget1">
 
        	 </div>
        	<div class="col-md-3 widget">

        	 </div>
        	<div class="clearfix"> </div>
		</div>
	<br/>
	<br/>
	<br/>
	<br/>
	<center>
<?php
$result = mysql_query("SELECT * FROM not_tb ");

echo "<table border='4'>
<tr>
<th align='center'>Id</th>
<th align='center'>Message</th>
<th align='center'>Action</th>

</tr>";

while($row = mysql_fetch_array($result))
{ 
echo "<form action='aprovalmsgaction.php' method='post'>";
echo "<tr>";
echo "<td align='center'>" . $row['nid'] . "</td>";
echo "<td>" . $row['message'] . "</td>";

echo '<td><button class="btn btn-primary" name="dropping">Delete</button></td>';
	echo "<input type='hidden' name='nid' value=".$row['nid'].">";
echo "</tr>";
echo "</form>";
}
echo "</table>";
		
	?>	
		</center>
				
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