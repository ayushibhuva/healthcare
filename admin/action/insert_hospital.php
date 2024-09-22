<?php

	include("dbconnection.php");

	
	$hospital_name=$_REQUEST['hospital_name'];
	$select_city=$_REQUEST['select_city'];
		
	 $q=mysql_query("select * from city where city_id='$select_city'");
	$row=mysql_fetch_array($q);
	$a=$row[city_id];

	
	$que=mysql_query("INSERT INTO hospital(city_id,hospital_name)
	values('$a','$hospital_name')");
	
   

	

	if($que)
	{
		$_SESSION['doctor_id']=$row['doctor_id'];
		echo $_SESSION['doctor_id'];
			header("location:../index.php?page=view_hospital");
		echo"insert record";
	}
	else
	{
		header("location:../index.php?page=add_doctor");
		echo mysql_error();
		
	}
?>
	