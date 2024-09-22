<?php
	
	include("action/dbconnection.php");
	$pp= $_SESSION['registration_id'];
	
	 $que="SELECT * FROM appointments a,doctor d WHERE a.doctor_id=d.doctor_id AND a.registration_id='".$pp."' ";
	$res=mysql_query($que);
	 $t=mysql_num_rows($res);
	if($t > 0)
		{
		echo "<div id='login'>";
		echo "<form action='' method='post'>";
		echo "<table align='center' border='8'>";
		echo "<tr>
		
		<th>doctor name</th>
		<th>appointment date</th>
		<th>appointment answer</th>
		
		</tr>";
		
		while($row=mysql_fetch_array($res))
		{
			echo "
			<td>".$row['doctor_name']."</td>
				<td>".$row['appointment_date']."</td>
				<td>".$row['appointment_report']."</td>
				</tr>";
		}	
		echo "</table>";
		echo "</form>";
		echo "</div>";
			
	}else{
?>
		 <script type="text/javascript">
alert('You have not any appointment..');
</script><?php
 //header("location:index.php?page=view_appointment");
 echo "<script>window.location.href='index.php?page=select_city'</script>";
	}	
		
		
	
?>