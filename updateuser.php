<?php
session_start();
include("dbconnect.php");
	$uname=$_SESSION['username'];
	$upass=$_SESSION['password'];
	$utype=$_SESSION['utype'];
	$sql="SELECT * FROM  `login_tb` WHERE username =  '$uname'AND PASSWORD =  '$upass'";
	$result=mysql_query($sql,$con);
	$rowcount=mysql_num_rows($result);

	if($rowcount !=0 && $utype=='user')
	{
    if(isset($_POST['submit']))
    {
      $name=$_POST[ 'name'];
      $state=$_POST['state'];
      $city=$_POST['city'];
      $contact=$_POST['contact'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $upd=mysql_query("update ureg_tb set name='$name',state='$state',city='$city',contact='$contact',email='$email',password='$password' where username='$uname' ",$con);
      $lgd=mysql_query("update login_tb set password='$password' where username='$uname'",$con);


      header('location: uprofile.php');
    }

?>


<?php
	}
	else
	{
		header("location:err.php");
	}
?>
