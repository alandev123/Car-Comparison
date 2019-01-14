<?php
session_start();
include("dbconnect.php");
	$uname=$_SESSION['username'];
	$upass=$_SESSION['password'];
	$utype=$_SESSION['utype'];

      if(isset($_POST['submit'])){

        $cname=$_POST[ 'cname'];
        $address=$_POST['address'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $pin=$_POST['pin'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $mpd=mysql_query("update mreg_tb set cname='$cname',address='$address',state='$state',city='$city',pin='$pin',contact='$contact',email='$email',password='$password' where username='$uname' ",$con);
        $mlgd=mysql_query("update login_tb set password='$password' where username='$uname'",$con);
        header("location: mprofile.php?suc='Update success'");
      }
?>
