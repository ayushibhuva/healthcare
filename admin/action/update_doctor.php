<?php
session_start();
	include("dbconnection.php");
	
	$doctor_name=$_POST['doctor_name'];
	$doctor_image=$_POST['doctor_image'];
	$doctor_contactno=$_POST['doctor_contactno'];
	$doctor_city=$_POST['doctor_city'];
	$doctor_degree=$_POST['doctor_degree'];
	$doctor_speciality=$_POST['doctor_speciality'];
	$doctor_charge=$_POST['doctor_charge'];
$filename=$_FILES["uploadfile"]["name"];
	$doctor_id=$_POST['doctor_id'];
	
	$query="select * from doctor where doctor_id='$doctor_id'";
	$res=mysql_query($query,$con);
	
	while($row=mysql_fetch_array($res))
	{
	
	 $query1="UPDATE  doctor SET doctor_name='$doctor_name',doctor_image='$filename',doctor_contactno='$doctor_contactno',doctor_city='$doctor_city',doctor_degree='$doctor_degree',doctor_speciality='$doctor_speciality',doctor_charge='$doctor_charge' where doctor_id='$doctor_id'";
	
	
	
		$res=mysql_query($query1,$con);
		if($res)
		{
			header("location:../index.php?page=view_doctor");
		}
	
	
	}
	?>