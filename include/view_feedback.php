<?php
	$query="select*from feedback";
	$result=mysql_query($query);
	
	if($result)
	{
		echo"<center>";
		echo"<table border=8>";
		echo"<br><br>";
		echo"<tr>";
		echo"<th colspan=5>feedbank</th>";
		echo"<tr>
		
				<th>name<th>
				<th>emailid</th>
				<th>feedback</th>
				<th>action</th><tr>";
		echo"<tr>";
		while($row=mysql_fetch_array($result))
		{
			//echo"<td>".$row['feedback_id']."</td>";
			//echo"<td>".$row['registration_id']."</td>";
			echo"<td>".$row['name']."</td>";
			echo"<td>".$row['emailid']."</td>";
			echo"<td>".$row['feedback']."</td>";
			echo"<td>
			<a href=action/deletefeed.php?feedback_id=".$row['feedback_id'].">
			<img src='image/32.jpg' height='30px' width='50px'>
			</a>"."<td>";
			echo"</tr>";
		}
		echo"</table>";
		echo"</center>";
	}
	else
	{
		echo mysql_error();
	}
?>		
		
		