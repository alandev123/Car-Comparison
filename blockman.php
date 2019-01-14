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
		if(isset($_POST['passed']))
		{
			$mid=$_POST['mid'];
			$username=$_POST['username'];

    $qry = mysql_query(" UPDATE login_tb SET utype = 'blockedcompany' WHERE username = '$username' ",$con);
	$qry1 = mysql_query("UPDATE mreg_tb SET status = 'blocked' WHERE username = '$username'",$con);		
			header('location: viewman.php');
}
				if(isset($_POST['unblocking']))
		{
			$mid=$_POST['mid'];
			$username=$_POST['username'];
			
	$qry = mysql_query(" UPDATE login_tb SET utype = 'company' WHERE username = '$username' ",$con);
	$qry1 = mysql_query("UPDATE mreg_tb SET status = 'approved' WHERE username = '$username'",$con);		
			header('location: viewman.php');
		}
		
		if(isset($_POST['deleting']))
		
		{
			$fid=$_POST['fid'];
			$quer = mysql_query("DELETE from `wheelie`.`mfeedback` WHERE `mfeedback`.`fid`='$fid'",$con);
			header('location: viewmfeedback.php');
		}
		
		

?>
<?php

	}
?>