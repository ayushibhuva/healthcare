<script type="text/javascript"language="javascript">
function check_valid()
{
	var PasswordRegex=/^[A-Za-z0-9@#$%*.]{1,15}$/;
	
	var newpass=document.frmforgetpwd3.newpass.value;
	var conpass=document.frmforgetpwd3.conpass.value;
if(newpass=="")
{
	alert("enter your new password");
	document.frmforgetpwd3.newpass.focus();
	return false;
}else if(!PasswordRegex.test(newpass))
		{
			alert("enter only charecter password");
			document.frmforgetpwd3.newpass.focus();
			return false;
		}	
if(conpass=="")
{
	alert("enter your Confirm password");
	document.frmforgetpwd3.conpass.focus();
	return false;
}else if(!PasswordRegex.test(conpass))
		{
			alert("enter only charecter Confirm fpassword");
			document.frmforgetpwd3.conpass.focus();
			return false;
		}	

}
</script>
<html>
		<body><div id="login">
		<form name="frmforgetpwd3" action="action/forget3.php" onsubmit="return check_valid();">
		
		<?php
			$registration_id=$_REQUEST['registration_id'];
			if(isset($registration_id))
			echo "<input type='hidden' name='registration_id' value='$registration_id'>";
		?>
		<center>
			<table border="10" div id="forget"><br><br><br>
				<tr>
					<th colspan=2 class="th"><h2>Forgot password</h2></th>
						</tr>
						<tr>
							<td>New password</td>
							<td><input type="password" name="newpass"></td>
						</tr>
						<tr>
							<td>Confirm password</td>
							<td><input type="password" name="conpass"></td>
						</tr>
						<tr>
						<td colspan=2 align="center">
							<button class="btn" type="submit">Submit</button>
							<button class="btn" type="reset">Clear</button>
						</td>
						</div>
		</table>
		<?php
					if(isset($_REQUEST['msg']))
					{
						if($_REQUEST['msg']==1)
						{
							echo "<center><h2>you are right</h2></center>";
						}
						else
						{
							echo "<center><font color='red' size='2px'><h1>password and confronpassword is not same</h1></font></center>";
						}
						echo"<br>";
					}
		?>				
		</center>
		
		</form>
		</div>
	</body>
</html>					
							
							