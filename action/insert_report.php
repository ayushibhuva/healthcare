<?php
include("dbconnection.php");
	 $answer=$_REQUEST['ans'];
	 $date=$_REQUEST['date'];
	
	$a_id=$_REQUEST['a_id'];
	
	echo "<br>";
	
		$sql="update appointments SET appointment_report='".$answer."' WHERE appointments_id='".$a_id."'";
		$result=mysql_query($sql,$con);
			if($result)
			{
				header("location:../index.php?page=view_appointment");
			}
			else
			{
				mysql_error();
			}
	
	?>