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

if(isset($_POST['submit']))
		{
		
		
		$msg = $_POST['msg'];
			$sql=mysql_query("INSERT INTO `notadm_tb`(`name`,`msg`)VALUES('$uname','$msg')",$con);


		header("location:loc.php?rrq=success");
		}
		
	}
	else
	{
		header("location:err.php");
	}
?>
