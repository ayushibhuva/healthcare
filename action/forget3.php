<?php
	include("dbconnection.php");
	echo $registration_id=$_REQUEST['registration_id'];
	echo $newpass=$_REQUEST['newpass'];
	echo $conpass=$_REQUEST['conpass'];
	if(isset($newpass)&&($conpass))

	{
		if(($newpass)==($conpass))
		{
			echo $query="update registration set password='$conpass' where registration_id='$registration_id'";
			if($res=mysql_query($query,$con))
			{
				echo "updated";
				header("location:../index.php?page=login");
			}
			else
			{
				header("location:../index.php?page=forgetpwd1&msg=1");
			}
		}
		else
		{		echo "new";	
			header("location:../index.php?page=forgetpwd3&msg=0&registration_id=".$registration_id);
		}
	}
?>				