<?php
	
	include("action/dbconnection.php");
	$d=$_SESSION['doctor_id'];
	
	$sql="SELECT * FROM appointments a,doctor d,registration r where d.doctor_id='".$d."' AND a.doctor_id=d.doctor_id AND r.registration_id=a.registration_id AND a.appointment_report='pending'";
	$res=mysql_query($sql,$con);
	 $t=mysql_num_rows($res);
	if($t > 0)
	{
	
		echo "<div id='login'>";
		echo "<form action='action/insert_report.php' method='POST'>";
		echo "<table align='center' border='8'>";
		echo "<tr>
		<th>doctor name</th>
		<th>patient name</th>
		<th>appointment date</th>
		<th>appointment time</th>
		<th>appointment status</th>
		<th>appointment answer</th>
		
		</tr>";
		
		while($row=mysql_fetch_array($res))
		{
			
			echo "<tr>";
			echo "<td>".$row['doctor_name']."</td>
					 <td>".$row['username']."</td>
					<td>".$row['appointment_date']."</td>
					<td>".$row['appointment_time']."</td>
					<td>".$row['appointment_status']."</td>
					<td>
						<image src='image/yes1.jpg' height='18px' width='25px' align='left'/>
						<a href='action/insert_report.php?a_id=$row[0]&ans=approve&date=$row[3]'>Approve</a>
						<image src='image/no.jpg' height='18px' width='25px' align='left'/>
					<a href='action/insert_report.php?a_id=$row[0]&ans=reject'>Reject</a>
					
			
			
			</td>	
			</tr>";
	
		}
					echo "</table>";
		 echo "</form>";
		echo "</div>";
	}else{
	//echo "<h1>Not any panding appointment,you give answer already.....</h1>";
		?>
		 <script type="text/javascript">
alert('Not any panding appointment,you give answer already....');
</script><?php
 //header("location:index.php?page=view_appointment");
 echo "<script>window.location.href='index.php?page=home'</script>";
	}
	
		if($_POST["Next"]=="Next"){
		 header("location:index.php?page=insert_report&appointments_id=$doctor");
		}

	
?>