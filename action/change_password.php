<?php
	include("dbconnection.php");
	
	echo $oldpass=$_REQUEST['oldpass'];
	echo $newpass=$_REQUEST['newpass'];
	echo $conpass=$_REQUEST['conpass'];
	
	if(isset($oldpass)&&($newpass)&&($conpass))
	{
	
		$registration_id=$_SESSION['registration_id'];
		echo $registration_id;
		echo $query="select * from registration where registration_id='$registration_id'";
		$res=mysql_query($query,$con);
		while($row=mysql_fetch_array($res))
		{
	
			$password=$row['password'];
			echo $password;
			if($oldpass==$password)
			{
				if($newpass==$conpass)
				{	
					echo $que="update registration set password='$newpass' where registration_id='$registration_id'";
						echo"<br>"."$que";
						$res=mysql_query($que,$con);
						header("location:../index.php?=login");
				}
				else
				{
				?>
					<script type="text/javascript">
						alert('enter same password....');
					</script><?php
					echo "<script>window.location.href='../index.php?page=changepassword'</script>";
				}
			}else
			{
				?>
				<script type="text/javascript">
					alert('enter right old password....');
				</script><?php
				echo "<script>window.location.href='../index.php?page=changepassword'</script>";
			}
		}
	}
	else
	{
		//echo "Not responding...";
		//header("location:../index.php?page=changepassword&msg=3");
			?>
				<script type="text/javascript">
					alert('enter  all password....');
				</script><?php
				echo "<script>window.location.href='../index.php?page=changepassword'</script>";
	}
?>