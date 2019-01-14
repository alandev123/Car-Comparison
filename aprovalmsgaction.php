<?php 
if(isset($_POST['dropping']))
		
		{
			$nid=$_POST['nid'];
			$quer = mysql_query("DELETE from `not_tb` WHERE `nid`='$nid'",$con);
			header('location: aprovalmsg.php');
		}
		
		?>