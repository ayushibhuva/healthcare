<?php
	include("dbconnection.php");
	$query="delete from hospital where hospital_id=".$_REQUEST['hospital_id'];
	echo $query;
	if(mysql_query($query,$con))
	{
		header("location:../index.php?page=view_hospital");
	}
	else
	{
		mysql_error();
	}
?>