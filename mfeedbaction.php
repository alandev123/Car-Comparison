
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
		$manq =mysql_query("select cname from `mreg_tb` where username = '$uname'",$con);
		$row = mysql_fetch_array($manq);
		$cname=$row['cname'];
		$feedback = $_POST['feedback'];
			$sql=mysql_query("INSERT INTO `wheelie`.`mfeedback` ( `cname`,`feedback`)VALUES('$cname','$feedback')",$con);


		header("location:mfeedback.php?succ=success");
		}
	}
