
<html>
	<head>
	</head>
	<body>
		<div id="login">
		<a href="index.php?page=doctor_detail"><image  class="homeimg" src="image/back.png" width="30px" height="30px"></image></a>

			<form name="app" action="action/insert_appointment.php" method="POST">
			<?php
				if(isset($_REQUEST['msg']))
				{
					if($_REQUEST['msg']==0)
					{
						echo"<h4 align='center'><font color='red'>selected appointment is past date....</font></h4>";
					}
					if($_REQUEST['msg']==1)
					{
						echo"<h4 align='center'><font color='red'>Appointment booked successfully...</font></h4>";

					}
					if($_REQUEST['msg']==2)
					{
						echo"<h4 align='center'><font color='red'>sorry,this appointment is already booked.....</font></h4>";
					}
				
				}
			?>	
			
			<table align="center" border="8" class="table">
				<th colspan="2"><h2>Take Appintment</h2></th>
			
				<tr>
					<td>date</td>
					<td><input type="date" name="date" required></td>
				</tr>
				<tr>
					<td>time</td>
					<td><input type="time" name="time" required></td>
				</tr>
				
				<tr>
			<td>appointment status</td>
			<td>old<input type="radio" name="status" value="old">
			new<input type="radio" name="status" value="new"></td>
		</tr>
				<tr>
				<td colspan=2 align="center">
					<button class="btn" type="submit" name="submit">Submit</button>
					<button class="btn" type="reset">Clear</button>
				</td>
				</tr>
			</table>
			</form>
			</div>
	</body>
</html>		
		