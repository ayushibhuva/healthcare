
<html>
<head>
	<link type="text/css" rel="stylesheet" href="style/style.css" /> 
</head>
<body>
	<div id="login">
		<form name="frmlogin" action="action/checklogin.php" method="POST">
		<?php
			if(isset($_REQUEST['msg']))
			{
				if($_REQUEST['msg']==0)
				{
					echo"<h4 align='center'><font color='red'>incorrect username and password....</font></h4>";
				}
				if($_REQUEST['msg']==1)
				{
					echo"login successfully";
				}
			}
		?>
		<table align="center" border="8" class="table">
			<th colspan="2"><h2>Login Form</h2></th>
			<tr>
				<td>username:</td>
				<td><input type="text" name="username" placeholder="enter user name"></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type="password" name="password" placeholder="enter password"></td>
			</tr>
			<tr>
				<td colspan=2 align="center">
				<button class="btn" type="submit">Submit</button>
				<button class="btn" type="reset">Clear</button>
				</td>
			</tr>
			<tr align="center">
				<td colspan="2"><a href="index.php?page=registration">I am new patient...</a><br>
				</td>
			</tr>
			<tr  align="center">
				<td colspan="2"><a href="index.php?page=forgetpwd1">forgot password???</a>
				</td>
			</tr>
		</table>
	</form>
			
</div>
</body>
</html>		
