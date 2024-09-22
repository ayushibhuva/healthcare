<?php
//session_start();
	include("dbconnection.php");
	
	$r_fname=$_POST['registration_firstname'];
	$r_lname=$_POST['registration_lastname'];

	$r_city=$_POST['registration_city'];
	$r_email=$_POST['registration_email'];
	$r_gender=$_POST['registration_gender'];
	$r_age=$_POST['registration_age'];
	$r_contactno=$_POST['registration_contactno'];
	$r_seq_que=$_POST['registration_sec_que'];
	$r_seq_ans=$_POST['registration_ans'];
	
	 $registration_id=$_SESSION['registration_id'];
	
	 $query="select * from registration where registration_id='$registration_id'";
	$res=mysql_query($query,$con);
	while($row=mysql_fetch_array($res))
	{
		echo  $query1="UPDATE registration SET registration_firstname='$r_fname',registration_lastname='$r_lname',registration_city='$r_city',registration_email='$r_email',registration_gender='$r_gender',registration_age='$r_age',registration_contactno='$r_contactno',registration_sec_que='$r_seq_que',registration_ans='$r_seq_ans' where registration_id='$registration_id'";
	
		$res=mysql_query($query1,$con);
		
	if($res)
		{
		header("location:../index.php?page=home");
		}
	
	
	}
	?>