<?php
include("dbconnection.php");
	$date=$_POST['date'];
	$time=$_POST['time'];
	$status=$_POST['status'];
	$ct=date(("Y-m-d"));
	
	$doctor_id=$_SESSION['d'];
	$b=$_SESSION['registration_id'];
	
	if($ct > $date)
	{
		
		header("location:../index.php?page=appointment&msg=0");	
	}else
	{
		//echo "<br>insert";
		 $sql="SELECT * FROM appointments WHERE doctor_id='".$doctor_id."' AND appointment_date='".$date."'";
		$res=mysql_query($sql,$con);
		if(mysql_num_rows($res) > 0)
		{
			//echo "sorry,this appointment is already booked.";
			header("location:../index.php?page=appointment&msg=2");
		}else
		{
			$que=mysql_query("INSERT INTO appointments(registration_id,doctor_id,appointment_date,appointment_time,appointment_status)
			values('$b','$doctor_id','$date','$time','$status')");
			if($que)
			{
				$_SESSION['appointments_id']=$row['appointments_id'];
				echo $_SESSION['appointments_id'];
				header("location:../index.php?page=view_appointment&msg=1");
				?>
		 <script type="text/javascript">
alert('appointment added....');
</script><?php
				 echo "<script>window.location.href='../index.php?page=view_appointment'</script>";

			}
			else
			{
			header("location:../index.php?page=appointment");
			}
		}
	}


mysql_close($con);


?>
