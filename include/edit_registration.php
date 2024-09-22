<?php
	include("dbconnection.php");
	session_start();
	$registration_id=$_SESSION['registration_id'];
	 $query=mysql_query("select *from registration where registration_id='$registration_id'");
	 while($row=mysql_fetch_array($query))
	{
		$registration_firstname=$row[2];
		$registration_lastname=$row[3];
		$registration_city=$row[6];
		$registration_email=$row[7];
		$registration_gender=$row[8];
		$registration_age=$row[9];
		$registration_contactno=$row[10];
		$registration_sec_que=$row[11];
		$registration_ans=$row[12];
				   
	}
?>	
<html>
<head>
		<link type="text/css" rel="stylesheet" href="style/style.css"> 
	</link>
</head>
	
		<title>Edit Profile</title>
</head>
<body>
<div id="login">
	<form name="frm" action="action/dpdate_registration.php" method="POST">
	<a href="index.php?page=home"><image  class="homeimg" src="image/home.png" width="30px" height="30px"></image></a>
	
		<table align="center" border="8">
		<tr>
			<th colspan="2" class="title"><h2>Edit Profile</h2></th>
			</tr>
			<tr>
				<td>firstname</td>
				<td><input type="text" name="registration_firstname" value="<?php echo $registration_firstname; ?>"></td>
			</tr>
			<tr>
				<td>lastname</td>
				<td><input type="text" name="registration_lastname" value="<?php echo $registration_lastname; ?>"></td>
			</tr>
		<tr>
			<td>city</td>
			<td><input type="text" name="registration_city" value="<?php echo $registration_city; ?>"></td>
		</tr>
		<tr>
			<td>emailid</img></td>
			<td><input type="text" name="registration_email" value="<?php echo $registration_email; ?>"></td>
		</tr>
		<tr>
			<td>gender</td>
			<td>male<input type="radio" name="registration_gender" value="male" value="<?php echo $male; ?>">
			femal<input type="radio" name="registration_gender" value="female" value="<?php echo $female; ?>"></td>
		</tr>
		<tr>
			<td>age</td>
			<td><input type="text" name="registration_age" value="<?php echo $registration_age; ?>"></td>
		</tr>
		<tr>
			<td>contactno</td>
			<td><input type="text" name="registration_contactno" value="<?php echo $registration_contactno; ?>"></td>
		</tr>
		<tr>
            <td>security que</td>
            <td><select name="registration_sec_que"  value="<?php echo $registration_sec_que;?>">
					<option>what is your hobby?</option>
			        <option>what is your favourite food?</option>
                    <option>what is your favourite movie?</option>	
               </option> </select>	
			</td>									 
	    </tr>
		<tr>
            <td>answer</td>
            <td><input type="text" name="registration_ans" value="<?php echo $registration_ans;?>"></td>		
	    </tr>

		<tr>
			<td><button class="btn" type="submit" value="submit" name="submit">Submit</button></td>
			<td><button class="btn" type="reset">Clear</button></td>
		</tr>
	
	</table>	
</form>
</div>
</body>

</html>

	