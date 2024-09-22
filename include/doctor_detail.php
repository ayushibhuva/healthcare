<?php
	include("dbconnection.php");
	
	
	$d=$_SESSION['d'];
	$query="select * from doctor where doctor_id=".$d;
	$result=mysql_query($query,$con);
	/*	if($result)
		{
			echo "<h1 align='center'>Doctor Detail</h1><br>";
		}*/
		while($row=mysql_fetch_array($result))
		{
			echo "<div id='login'>";
			echo "<form name='' action='' method='POST'>";
			echo "<table align='center' class='doctor'>";
		echo '<a href="index.php?page=select_doctor"><image  class="homeimg" src="image/back.png" width="30px" height="30px"></image></a>';

			echo "<tr><td colspan=2 align='center'><h1>Doctor Detail</h1></td></tr><br>";
			echo "<tr><td rowspan='9'>";
			echo "<img src='doctor/".$row['doctor_image']."'height=250 width=200/>";
			echo "</td>";
			echo "</tr>";
			
			
			echo "<tr><td><b>Name:</b>".$row['doctor_name']."</td></tr>";
			echo "<tr><td><b>Gender:</b>".$row['doctor_gender']."</td></tr>";
			echo "<tr><td><b>EmailId:</b>".$row['doctor_emailid']."</td></tr>";
			echo "<tr><td><b>Contactno:</b>".$row['doctor_contactno']."</td></tr>";
			echo "<tr><td><b>City:</b>".$row['doctor_city']."</td></tr>";
			echo "<tr><td><b>Degree:</b>".$row['doctor_degree']."</td></tr>";
			echo "<tr><td><b>Specialist:</b>".$row['doctor_speciality']."</td></tr>";
			echo "<tr><td><b>Charge:</b>".$row['doctor_charge']."</td></tr>";
			echo '<tr><td colspan=2 align="center"><input type="submit" name="Next" value="Next" class="btn"></td></tr>';
			
			echo "</table></div><br>";
		
			//echo "<input type='hidden'name='product_id'value="$_REQUEST['product_id'].">";
			
		}
		if($_POST["Next"]=="Next"){
		 header("location:index.php?page=appointment&doctor_id=$d");
		}
	
?>								
									
									
							
						
						
						
			