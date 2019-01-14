
<?php
session_start();
include("dbconnect.php");
$u_id=$_POST['u_id'];
$u_pass=$_POST['u_pass'];
$sql="select * from login_tb where username='$u_id'";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
if($rowcount)
{
	while($row=mysql_fetch_array($result))
	{
		
		$dbu_id=$row['lid'];
		$dbu_name=$row['username'];
		$dbu_pass=$row['password'];
		$dbu_type=$row['utype'];
		$dbu_status=$row['status'];
		
		if($dbu_name==$u_id && $dbu_pass==$u_pass && $dbu_type=='user')
		
		{
			$_SESSION['utype']=$dbu_type;
			$_SESSION['lid']=$dbu_id;
			$_SESSION['password']=$dbu_pass;
			$_SESSION['username']=$dbu_name;
			$_SESSION['status']=$dbu_status;
			
			header("location:uhome.php");
				
		}
		
		elseif($dbu_name==$u_id && $dbu_pass==$u_pass && $dbu_type=='companynotaproved')
		{
			
			header("location:login.php?error=You are not approved <a href=loc.php>Click here to send a notification</a>");
		}
		
		elseif($dbu_name==$u_id && $dbu_pass==$u_pass && $dbu_type=='blockedcompany')
		{
			
			header("location:login.php?error='You are Blocked'");
		}
		
		elseif($dbu_name==$u_id && $dbu_pass==$u_pass && $dbu_type=='company')
		{
			$_SESSION['utype']=$dbu_type;
			$_SESSION['lid']=$dbu_id;
			$_SESSION['password']=$dbu_pass;
			$_SESSION['username']=$dbu_name;
			$_SESSION['status']=$dbu_status;
			header("location:mhome.php");
		}
		



		elseif($dbu_name==$u_id && $dbu_pass==$u_pass && $dbu_type=='admin')
		{
			$_SESSION['utype']=$dbu_type;
			$_SESSION['lid']=$dbu_id;
			$_SESSION['password']=$dbu_pass;
			$_SESSION['username']=$dbu_name;
			$_SESSION['status']=$dbu_status;
			header("location:homeadmin.php");
		}
		
		elseif($dbu_name==$u_id && $dbu_pass!=$u_pass)
		{
			//echo("Incorrect Password");
			header("location:login.php?error='Wrong Password'");
			
		}
		

	
		elseif($dbu_name!=$u_id && $dbu_pass!=$u_pass)
		{
			header("location:login.php?error='Username not valid'");			
			
		}
		
		else
		{
			header("location:login.php?error='Enter a valid username'");
			
		}
		
	}

}
else
{
	header("location:login.php?error='Wrong Username'");
}
?>