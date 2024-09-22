<?php 
	if(isset($_REQUEST['msg']))
		{
			if($_REQUEST['msg']==1)
			{
				echo "<div id='login'>";
				echo "<h1 align='center'><font color='black' size='5px'>Appointment booked successfully...</font></h1>";
				echo "</div>";
			}
		}
?>
<?php
	
	include("action/dbconnection.php");
	$registration_id= $_SESSION['registration_id'];
	if($_SESSION['usertype']==0)
	{
		$que="SELECT * FROM appointments a,doctor d,registration r where a.doctor_id=d.doctor_id AND r.registration_id=a.registration_id AND a.registration_id='".$registration_id."'";	
		$res=mysql_query($que);
		if(mysql_num_rows($res) > 0)
		{
			echo "<div id='login'>";
			echo "<table align='center' border='5'>";
			echo "<tr>";

			echo "<th>patient name</th>
			<th>doctor name</th>
			<th>date</th>
			<th>time</th>
			<th>appointment status</th>
			<th>appointment report</th>
			<th>delete</th>
			</tr>";
		
		
			while($row=mysql_fetch_array($res))
			{				
				echo "<tr>
					<td>".$row['username']."</td>
					<td>".$row['doctor_name']."</td>
					<td>".$row['appointment_date']."</td>
					<td>".$row['appointment_time']."</td>
					<td>".$row['appointment_status']."</td>
					<td>".$row['appointment_report']."</td>
					<td align='center'><a href=action/delete_appointment.php?appointments_id=".$row['appointments_id'].">
					<image src='image/delete6.png' height='40px' width='40px' />
					</a></td>
				</tr>";
				$_SESSION['aid']=$app;
			}
		echo "</table>";
		echo "</div>";
	}
	else
	{
		?>
		<script type="text/javascript">
alert('Not any appointment..');
</script><?php
 //header("location:index.php?page=view_appointment");
 echo "<script>window.location.href='index.php?page=select_city'</script>";
	}	
	
}elseif($_SESSION['usertype']==1)
	{
		$doctor_id=$_SESSION['doctor_id'];
		$que="SELECT * FROM appointments a,doctor d,registration r where a.doctor_id=d.doctor_id AND r.registration_id=a.registration_id AND a.doctor_id='".$doctor_id."'";	
	$res=mysql_query($que);
	$t=mysql_num_rows($res);
	if($t > 0)
	{
		echo "<div id='login'>";
			echo "<table align='center' border='5'>";
			echo "<tr>
		
			<th>patient name</th>
			<th>doctor name</th>
			<th>date</th>
			<th>time</th>
			<th>appointment status</th>
			<th>appointment report</th>
			</tr>";
		

		while($row=mysql_fetch_array($res))
		{
			echo "<tr>
				<td>".$row['username']."</td>
				<td>".$row['doctor_name']."</td>
				<td>".$row['appointment_date']."</td>
				<td>".$row['appointment_time']."</td>
				<td>".$row['appointment_status']."</td>
				<td>".$row['appointment_report']."</td>
				
			</tr>";
		}
		echo "</table>";
		echo "</div>";
	}else{
	?>
		 <script type="text/javascript">
alert('Not any appointment..');
</script><?php
 //header("location:index.php?page=view_appointment");
 echo "<script>window.location.href='index.php?page=home'</script>";
		
	}
}
	else
	{
		echo mysql_error();
	}
?>