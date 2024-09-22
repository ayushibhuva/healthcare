<?php

	include("dbconnection.php");

	
	$doctor_name=$_REQUEST['doctor_name'];
	$doctor_gender=$_REQUEST['doctor_gender'];
	$doctor_email=$_REQUEST['doctor_email'];
	$doctor_contactno=$_REQUEST['doctor_contactno'];
	$doctor_city=$_REQUEST['doctor_city'];
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$select_hospital=$_REQUEST['select_hospital'];
	$doctor_degree=$_REQUEST['doctor_degree'];
	$doctor_speciality=$_REQUEST['doctor_speciality'];
	$doctor_charge=$_REQUEST['doctor_charge'];
	//$uploadfile=$_REQUEST['uploadfile'];

	$filename=$_FILES["uploadfile"]["name"];
	$tempname=$_FILES["uploadfile"]["temp_name"];
	//$folder="dimage/".$filename;
	move_uploaded_file($tempname,$folder);
	
 $q=mysql_query("select * from hospital where hospital_id='$select_hospital'");
	$row=mysql_fetch_array($q);
	//$a=$row[hospital_id];
$b=$_SESSION['hospital_id'];
	
	/*echo $que=mysql_query("INSERT INTO doctor(disease_id,doctor_name,doctor_emailid,username,password,doctor_speciality,doctor_charge,doctor_image)
	values('$a','$doctor_name','$doctor_email','$username','$password','$doctor_speciality','$doctor_charge','".$filename=$_FILES["uploadfile"]["name"]."')");*/
	
	
	echo $que=mysql_query("INSERT INTO doctor(hospital_id,doctor_name,doctor_gender,doctor_emailid,doctor_contactno,doctor_city,username,password,doctor_degree,doctor_speciality,doctor_charge,doctor_image)
	values('$select_hospital','$doctor_name','$doctor_gender','$doctor_email','$doctor_contactno','$doctor_city','$username','$password','$doctor_degree','$doctor_speciality','$doctor_charge','$filename')");
	

	if($que)
	{
		$_SESSION['doctor_id']=$row['doctor_id'];
		echo $_SESSION['doctor_id'];
			header("location:../index.php?page=view_doctor");
		echo"insert record";
	}																																																																																																																							
	else
	{
		header("location:../index.php?page=add_doctor");
		echo mysql_error();
		
	}
?>
	