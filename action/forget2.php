<?php
	include("dbconnection.php");
	echo $registration_ans=$_REQUEST['registration_ans'];
	echo $registration_id=$_REQUEST['registration_id'];
	if(isset($registration_ans))
	{
		echo $query="select * from registration where registration_id=".$registration_id;
		echo $res=mysql_query($query,$con);
		if($row=mysql_fetch_array($res))
		{
			echo $registration_dbans=$row['registration_ans'];
			if($registration_dbans==$registration_ans)
			{
				echo "correct answer";
				header("location:../index.php?page=forgetpwd3&registration_id=$registration_id");
			}
			else
			{
				echo "not";
				header("location:../index.php?page=forgetpwd2&msg=1&registration_id=".$registration_id);
			}
		}
	}
?>		