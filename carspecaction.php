
<?php

session_start();
include("dbconnect.php");
	$uname=$_SESSION['username'];
	$upass=$_SESSION['password'];
	$utype=$_SESSION['utype'];
	$sql="SELECT * FROM  `login_tb` WHERE username =  '$uname' AND PASSWORD =  '$upass'";
	$result=mysql_query($sql,$con);
	$rowcount=mysql_num_rows($result);
	if($rowcount !=0 && $utype=='company')
	{
		if(isset($_POST['submit']))
		{
		$cname = $_POST['cname'];
		$cad =mysql_query("select * from `carname_tb` where carid = '$cname'",$con);
		$row = mysql_fetch_array($cad);
		$carid=$row['carid'];
		//$mid=$row['mid'];
			// use $ddd[0] while insertion
		$image =time().$_FILES['imageUpload']['name'];
		move_uploaded_file($_FILES['imageUpload']['tmp_name'],"pics/car/".$image);
		$type = $_POST['ctype'];
		//$carname = $_POST['carname'];
		$varient = $_POST['varient'];
		$fuel = $_POST['fuel'];
		$cc = $_POST['cc'];
		$transm = $_POST['transm'];
		$gear = $_POST['gear'];
		$power = $_POST['power'];
		$torque = $_POST['torque'];
		$cylinder = $_POST['cylinder'];
		$fcap = $_POST['fcap'];
		$milage = $_POST['milage'];
		$ground = $_POST['ground'];
		$wheelbase = $_POST['wheelbase'];
		$kweight = $_POST['kweight'];
		$boot = $_POST['boot'];
		$length = $_POST['length'];
		$height = $_POST['height'];
		$width = $_POST['width'];
		$tyres = $_POST['tyres'];
		$seat = $_POST['seat'];
		$pw = $_POST['pw'];
		$abs = $_POST['abs'];
		$cl = $_POST['cl'];
		$awd = $_POST['awd'];
		$alloy = $_POST['alloy'];
		$tube = $_POST['tube'];
		$tsn = $_POST['tsn'];
		$sun = $_POST['sun'];
		$rc = $_POST['rc'];
		$rs = $_POST['rs'];
		$fl = $_POST['fl'];
		$dtrl = $_POST['dtrl'];
		$cruise = $_POST['cruise'];
		$orvm = $_POST['orvm'];
		$cost = $_POST['cost'];
		$sql=mysql_query("INSERT INTO `car_tb` (`carid`,`image`, `type`, `variet`, `fuel`, `cc`, `transm`, `gear`, `power`, `torque`, `cylider`, `fcap`, `milage`, `ground`, `wheelbase`, `kweight`, `boot`, `length`, `height`, `width`, `tyres`, `seat`, `pw`, `abs`, `cl`, `awd`, `alloy`, `tube`, `tsn`, `sun`, `rc`, `rs`, `fl`, `dtrl`, `cruise`, `orvm`, `cost`) VALUES('$carid','$image','$type','$varient','$fuel','$cc','$transm','$gear','$power','$torque','$cylinder','$fcap','$milage','$ground','$wheelbase','$kweight','$boot','$length','$height','$width','$tyres','$seat','$pw','$abs','$cl','$awd','$alloy','$tube','$tsn','$sun','$rc','$rs','$fl','$dtrl','$cruise','$orvm','$cost') ",$con);
			
			if($sql){
				echo 'success';
				header("location:carspec.php");
			}
			else{
				echo 'fail';
			}
		//header("location:carspec.php");




		}
	}
	
?>
