<?php
  session_start();
	include("dbconnection.php");
 

	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$que="select * from admin where username='$username' AND password='$password'";
    $res=mysql_query($que,$con);
	
	if($row=mysql_fetch_array($res))
	{
	  echo $_SESSION['username']=$row['username'];
	    echo $_SESSION['usertype']=$row['usertype'];
		  echo $_SESSION['admin_id']=$row['admin_id'];
		  
			if($_SESSION['usertype']==1)
			{
				header("location:../index.php?page=home&msg=1");
			}
	}
	else
	{
		header("location:../index.php?page=login&msg=0");
	}
  
 
  
 
?>
