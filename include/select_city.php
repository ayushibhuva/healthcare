<?php
	//session_start();
	include("action/dbconnection.php");
	$que="SELECT * FROM city";
	$res=mysql_query($que);
	if($res)
	{
		echo "<div id='login'>";
		echo '<form name="city" action="" method="POST">';
		echo '<a href="index.php?page=home"><image  class="homeimg" src="image/home.png" width="30px" height="30px"></image></a>';

		echo "<table align='center' border='5' size='10px'>";
		echo "<tr>
	
		<th>city name</th>
		</tr>
		
		<tr><td><select name='c'>";
		while($row=mysql_fetch_array($res))
		{
			$x=$row[0];
			$y=$row[1];
			echo '
				<option value="'.$x.'">'.$y.'</option>';
		}
		echo "</select></td></tr>";
		echo '<tr><td colspan="2" align="center">
				<input type="submit" name="Next" value="Next" class="btn">
				</td></tr></table>';
		echo "</form>";		
		echo "</div>";
		$c=$_POST["c"];
		if($_POST["Next"]=="Next"){
		 header("location:index.php?page=select_hospital&city_id=$c");
		}
	}	
	else
	{
		echo mysql_error();
	}
	
?>