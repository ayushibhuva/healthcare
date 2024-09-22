<?php
		include("dbconnection.php");
		$query="delete from city where city_id=".$_REQUEST['city_id'];
		echo $query;
		if(mysql_query($query,$con))
	{
		header("location:../index.php?page=view_city");
	}
	else
	{
		mysql_error();
	}
?>