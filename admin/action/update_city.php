<?php
session_start();
	include("dbconnection.php");
	
	$c_name=$_POST['city_name'];
	$city_id=$_POST['city_id'];
	 
	
	$query="select * from city where city_id='$city_id'";
	$res=mysql_query($query,$con);
	while($row=mysql_fetch_array($res))
	{
		echo  $query1="UPDATE city SET city_name='$c_name' where city_id='$city_id'";
		
		$res=mysql_query($query1,$con);
		if($res)
		{
			header("location:../index.php?page=view_city");
		}
	}
	
?>	