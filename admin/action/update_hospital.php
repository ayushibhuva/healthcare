<?php

	include("dbconnection.php");
	$h_name=$_POST['hopital_name'];
	$hospital_id=$_POST['hospital_id'];
	
	
	  $query="select * from hospital where hospital_id='$hospital_id'";
	$res=mysql_query($query,$con);
	while($row=mysql_fetch_array($res))
	{
	
	  $query1="UPDATE  hospital SET hospital_name='$h_name' where hospital_id='$hospital_id'";
		$res=mysql_query($query1,$con);

		if($res)
		{
			header("location:../index.php?page=view_hospital");
		}
	
	}
?>