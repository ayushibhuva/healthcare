<?php
	include("dbconnection.php");
	$query="delete from doctor where doctor_id=".$_REQUEST['doctor_id'];
	echo $query;
	if(mysql_query($query,$con))
	{
		header("location:../index.php?page=view_doctor");
	}
	else
	{
		mysql_error();
	}
?>