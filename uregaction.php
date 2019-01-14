<!-- php script -->
<?php
include 'dbconnect.php';

	
	$name = $_POST['name'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$qry1 = mysql_query("SELECT `lid` FROM `login_tb` WHERE username= '$username' ");
	

	if(mysql_num_rows($qry1)>0)
	{
		echo(mysql_num_rows($qry1));
		echo($username);
		echo("username already exist try another");
		
	}
	else{
		$query = mysql_query("insert into ureg_tb(name,state,city,contact,email,username,password)values('$name','$state','$city',$contact,'$email','$username','$password')",$con);
		
		$qry = mysql_query("insert into login_tb(username,password,utype,status)values('$username','$password','user','0')",$con);
		header("location:login.php");
	}
	


?>