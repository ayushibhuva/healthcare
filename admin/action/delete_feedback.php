<?php
	include("dbconnection.php");
	$query="delete from feedback where feedback_id=".$_REQUEST['feedback_id'];
	echo $query;
	if(mysql_query($query,$con))
	{
		header("location:../index.php?page=view_feedback");
	}
	else
	{
		mysql_error();
	}
?>