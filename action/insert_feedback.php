<?php
include("dbconnection.php");

	$message=$_POST['message'];
	
	$q=mysql_query("select * from registration");
	$row=mysql_fetch_array($q);
	$a=$row[username];
	
	$que="insert into feedback(username,message)values('$a','$message')";
	$result=mysql_query($que,$con);
	
	if($result)
	{	
		 header("location:../index.php?page=home");
		 echo "insert record";
	}
	else
	{
			echo mysql_error();
	} 

?>
	