
<?php

	include("dbconnection.php");
	
	$r_fname=$_POST['registration_firstname'];
	$r_lname=$_POST['registration_lastname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$r_city=$_POST['registration_city'];
	$r_email=$_POST['registration_email'];
	$r_gender=$_POST['registration_gender'];
	$r_age=$_POST['registration_age'];
	$r_contactno=$_POST['registration_contactno'];
	$r_seq_que=$_POST['registration_sec_que'];
	$r_seq_ans=$_POST['registration_ans'];
	
	if($_REQUEST["submit"]=="submit")
	{	
		$userquery="select * from registration where username='$username'";
		$query=mysql_query($con,$userquery);
		
		$que=mysql_query("INSERT INTO registration(registration_firstname,registration_lastname,username,password,registration_city,registration_email,registration_gender,registration_age,registration_contactno,registration_sec_que,registration_ans)values('$r_fname','$r_lname','$username','$password','$r_city','$r_email','$r_gender','$r_age','$r_contactno','$r_seq_que','$r_seq_ans')");
	
	if($que)
	{
		$_SESSION['registration_id']=$row['registration_id'];
		echo $_SESSION['registration_id'];
		header("location:../index.php?page=login");
	}
	else
	{
		 header("location:../index.php?page=home");
	}
}
mysql_close($con);

?>
