<?php
	include("dbconnection.php");
	$query="delete from registration where registration_id=".$_REQUEST['registration_id'];
	echo $query;
	if(mysql_query($query,$con))
	{
		header("location:../index.php?page=view_registration");
	}
	else
	{
		mysql_error();
	}
?>