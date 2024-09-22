
<?php
	
	include("action/dbconnection.php");
	$city_id=$_REQUEST['city_id'];
	/*$_SESSION['city_id']=$_REQUEST['city_id'];
$city_id=$_SESSION['city_id'];*/
		echo "<div id='login'>";
		echo '<form name="city" action="" method="POST">';
		echo '<a href="index.php?page=select_city"><image  class="homeimg" src="image/back.png" width="30px" height="30px"></image></a>';

		echo "<table align='center' border='5'>";
		echo "<tr>
	
		<th>hospital name</th>
		</tr>
		<tr><td><select name='h'>";
		$query=mysql_query("select * from hospital where city_id=$city_id");
		while($row=mysql_fetch_array($query))
		{
			$x=$row[0];
			$y=$row[2];
			echo '<option value="'.$x.'">'.$y.'</option>';
		}
		echo "</select></td></tr>";
		echo '<tr><td colspan="2" align="center">
				<input type="submit" name="Next" value="Next" class="btn">
				</td></tr></table>';
	 echo "</table>";
	 echo "</form>";		
		echo "</div>";
		$h=$_POST["h"];
		if($_POST["Next"]=="Next"){
		 header("location:index.php?page=select_doctor&hospital_id=$h");
		}
?>