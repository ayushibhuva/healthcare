<div id="doctor_homepage">

<?php
	include("action/dbconnection.php");
	$doctor_id=$_SESSION['doctor_id'];
	
	/*$que="SELECT count(doctor_id)  as total_doctor from doctor";
	$res=mysql_query($que);
	$total_doctor=0;
	if($row=mysql_fetch_array($res))
		{
			$total_doctor=$row['total_doctor'];
		}
	*/
	$que="SELECT count(registration_id)  as total_users from registration";
	$res=mysql_query($que);
	$total_users=0;
	if($row=mysql_fetch_array($res))
		{
			$total_users=$row['total_users'];
		}
		
	$que="SELECT count(registration_id)  as total_appointment from appointments WHERE doctor_id=$doctor_id ";
	$res=mysql_query($que);
	$total_appointment=0;
	if($row=mysql_fetch_array($res))
		{
			$total_appointment=$row['total_appointment'];
		}


echo '<table align="center">';
	
	echo	'<tr>';

	
	echo '<td class="bgblue">'.$total_users.'</td>';
	echo '<td class="bggreen">'.$total_appointment.'</td>';		
	echo '</tr>';

	echo  '<th>Patients</th>';
	echo  '<th>Appointments</th></tr>';
	echo '</table>';
	
	
	?>
	
</div>