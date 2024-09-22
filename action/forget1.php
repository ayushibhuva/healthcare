<?php
include("dbconnection.php");
	echo $username=$_REQUEST['username'];
	
	if(isset($username))
	{
		echo $query="select * from registration where username='$username' AND usertype=0";
		echo $res=mysql_query($query,$con);
		if($row=mysql_fetch_array($res))
		{
			echo $registration_id=$row[0];
			echo "User is match";
			header("location:../index.php?page=forgetpwd2&registration_id=$registration_id");
		}
		else
		{
			header("location:../index.php?page=forgetpwd1&msg=1");
		}
	}
?>