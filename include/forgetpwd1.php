<script type="text/javascript" language="javascript">
function check_valid()
{
	var NameRegex=/^[A-Za-z]{1,15}$/;
	var username=document.frmforgetpwd1.username.value;
	if(username=="")
	{
		alert("Enter your user name:");
		document.frmforgetpwd1.username.focus();
		return false;
	}
	else if(!NameRegex.test(username))
	{
		alert("Enter only character in user name:");
		document.frmforgetpwd1.username.focus();
		return false;
	}
</script>
<html>
	<body>
	<div id="login">
		<form name="frmforgetpwd1" action="action/forget1.php" onsubmit="return check_valid();">
			<?php
				if(isset($_REQUEST['msg']))
				{
					if($_REQUEST['msg']==1)
					{
						echo "<center><font color='red'><h2>incorrect username</h2></font></center>";
					}
					else
					{
						echo "<center><h1>You are right</h1></center>";
					}
					echo "<br>";
				}
			?>
			<center>
				<table border="10" >
					<tr>
						<th colspan=2 class="th">Forgot password</th>
					</tr>
					<tr>
						<td>User Name</td>
						<td><input type="text" name="username"></td>
					</tr>
						<tr>
						<td colspan=2 align="center">
						<button class="btn" type="submit">Submit</button>
						<a href="index.php?login"></a><button class="btn" type="reset">Clear</button></td>
					</tr>
					
				</table>
				
			</center>
		</form>
		</div>
	</body>
</html>