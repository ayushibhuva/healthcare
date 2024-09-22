<?php
	include("dbconnection.php");
	
	echo $query="delete from appointments where appointments_id=".$_REQUEST['appointments_id'];
	if(mysql_query($query,$con))
	{
		header("location:../index.php?page=view_appointment");
	}
	else
	{
		mysql_error();
	}
	
?>