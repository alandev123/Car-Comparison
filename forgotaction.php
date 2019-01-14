<?php
include('dbconnect.php');

$uname=$_POST['person'];
$pass=$_POST['pass'];

$confirm=$_POST['confirm'];

if($pass!=$confirm)
{
  header("location: forgot.php?eror=passwords are not matching");
}


$qqw=mysql_query("select utype from login_tb where username='$uname'",$con);

$q=mysql_fetch_array($qqw);
echo $q;
if($q=='company'){
$upq2=mysql_query("update mreg_tb set password='$pass' where username='$uname'",$con);
$upq1=mysql_query("update login_tb set password='$pass' where username='$uname'",$con);
}
elseif($q=='user')
{
$upq3=mysql_query("update ureg_tb set password='$pass' where username='$uname'",$con);
$upq1=mysql_query("update login_tb set password='$pass' where username='$uname'",$con);
}
//header("location: login.php?error=Password Changed Successfully");


?>
