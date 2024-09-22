<?php
include("dbconnection.php");
 
  $username=$_POST['username'];
	$password=$_POST['password'];
	
  $pquery="select * from registration where username='$username' AND password='$password'";
    $presult=mysql_query($pquery,$con);
	
  $dquery="select * from doctor where username='$username' AND password='$password'";
     $dresult=mysql_query($dquery,$con);
		
	if($row=mysql_fetch_array($presult))
	{
		echo "$username";
		echo $_SESSION['username']=$row['username'];
		echo $_SESSION['usertype']=$row['usertype'];
		  echo $_SESSION['registration_id']=$row['registration_id'];
		if(!$presult=="")
		{
		header("location:../index.php?page=home&msg=1");
		}else{
			header("location:../index.php?page=login&msg=0"); 
		}
	}elseif($row=mysql_fetch_array($dresult))
	{
		echo "$username";
		echo $_SESSION['username']=$row['username'];
		echo $_SESSION['usertype']=$row['usertype'];
		  echo $_SESSION['doctor_id']=$row['doctor_id'];
		if(!$dresult=="")
		{
		header("location:../index.php?page=doctor_home&msg=1");
		}else{
			header("location:../index.php?page=login&msg=0"); 
		}
	}else
	{
		header("location:../index.php?page=login&msg=0");
	}
  
	
	
	
	
/*	if($row=mysql_fetch_array($result))
	{
		echo "$username";
		echo $_SESSION['username']=$row['username'];
		echo $_SESSION['usertype']=$row['user_type'];
		  echo $_SESSION['registration_id']=$row['registration_id'];
		if($_SESSION['usertype']==0)
		{
			header("location:../index.php?page=home");
		}
		elseif($_SESSION['usertype']==1)
		{
			
			header("location:../index.php?page=login"); 
		}
	}else
	{
		header("location:../index.php?page=login"); 
	}
  
 */
  
 
?>
