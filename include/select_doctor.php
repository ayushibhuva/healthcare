
<?php
	
	include("action/dbconnection.php");
	$hospital_id=$_REQUEST['hospital_id'];
	// echo $hospital_id;
	
		echo "<div id='login'>";
		echo '<form name="city" action="" method="POST">';
		echo '<a href="index.php?page=select_hospital"><image class="homeimg" src="image/back.png" width="30px" height="30px"></image></a>';

		echo "<table align='center' border='5'>";
		echo "<tr>
	
		<th>doctor name</th>
		</tr>
		<tr><td><select name='doctor'>";
		$query=mysql_query("select * from doctor where hospital_id=$hospital_id");
		
		while($row=mysql_fetch_array($query))
		{
			$x=$row[0];
			$y=$row[3];
			
			$_SESSION['d_id']=$row[0];
			echo '<option value="'.$x.'">'.$y.'</option>';
			
			
		}
		echo "</select></td></tr>";
		echo '<tr><td colspan="2" align="center">
				<input type="submit" name="Next" value="Next" class="btn">
				</td></tr></table>';
	 echo "</table>";
	 echo "</form>";		
		echo "</div>";
		$doctor=$_POST['doctor'];
		$_SESSION['d']=$doctor;
		if($_POST["Next"]=="Next"){
		 header("location:index.php?page=doctor_detail&doctor_id=$doctor");
		}
?>




