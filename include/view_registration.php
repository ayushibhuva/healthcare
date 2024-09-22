<?php
	include("action/dbconnection.php");
	$que="SELECT * FROM registration"; 
	//r,appointments a,doctor d where r.registration_id=a.registration_id AND a.doctor_id=d.doctor_id";
	$res=mysql_query($que);
	if($res)
	{
		echo "<div id='login'>";
		echo "<table align='center' border='8'>";
		echo "<tr>
		<th>firstname</th>
		<th>lastname</th>
		<th>city</th>
		<th>emailid</th>
		<th>gender</th>
		<th>age</th>
		<th>contactno</th>
		</tr>";
		
		while($row=mysql_fetch_array($res))
		{
			echo "<tr>
				<td>".$row['registration_firstname']."</td>
				<td>".$row['registration_lastname']."</td>
				<td>".$row['registration_city']."</td>
				<td>".$row['registration_email']."</td>
				<td>".$row['registration_gender']."</td>
				<td>".$row['registration_age']."</td>
				<td>".$row['registration_contactno']."</td>
				</tr>";
		}
		echo "</table>";
		echo "</div>";
	}	
	else
	{
		echo mysql_error();
	}

?>