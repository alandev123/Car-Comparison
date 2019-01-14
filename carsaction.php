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
		if(isset($_POST['submit']))
		{
		$manq =mysql_query("select mid ,cname from `mreg_tb` where username = '$uname'",$con);
		$row = mysql_fetch_array($manq);
		
		$mid=$row['mid'];
		$carname = $_POST['carname'];
			$sql=mysql_query("INSERT INTO `wheelie`.`carname_tb` (`mid`,`muname`,`carname`)VALUES('$mid','$uname','$carname')",$con);
			header("location: cars.php");
		}
	}