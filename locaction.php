<?php 
include("dbconnect.php");
if(isset($_POST['submit']))
		{
		
		
		$notification = $_POST['notification'];
			$sql=mysql_query("INSERT INTO `not_tb`(`message`)VALUES('$notification')",$con);


		header("location:loc.php?error=success");
		}
		?>