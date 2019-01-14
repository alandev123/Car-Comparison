<!-- php script -->
<?php
include 'dbconnect.php';

	
	$cname = $_POST['cname'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$pin = $_POST['pin'];
	$contact = $_POST['contact'];
	$cin = $_POST['cin'];
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
		$query = mysql_query("insert into mreg_tb(cname,address,state,city,pin,contact,cin,email,username,password,status)values('$cname','$address','$state','$city',$pin,$contact,'$cin','$email','$username','$password','pending')",$con);
		
		$qry = mysql_query("insert into login_tb(username,password,utype,status)values('$username','$password','companynotaproved','2')",$con);
		header("location:login.php");
	}
	


?>