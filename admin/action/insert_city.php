<?php

	include("dbconnection.php");

	
	$city_name=$_REQUEST['city_name'];
			
	$que=mysql_query("INSERT INTO city(city_name)values('$city_name')");
 	if($que)
	{
		$_SESSION['city_id']=$row['city_id'];
		echo $_SESSION['city_id'];
			header("location:../index.php?page=view_city");
		echo"insert record";
	}
	else
	{
		echo mysql_error();
	}
?>
	