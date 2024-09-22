<html>
<head>
</head>
<body>
	<div id="login">
		<form action="action/change_password.php" method="POST">
			<table border="10" align="center">
				<th colspan=2><h1>change password</h1></th>
				<tr>
					<td>Old Password</td>
					<td>
					<input type="password" name="oldpass" placeholder="enter old password" >
					</td>
				</tr>
				<tr>
					<td>New password</td>
					<td>
					<input type="password" name="newpass" class="textbox" placeholder="enter new password" >
					</td>
				</tr>
				<tr>
					<td>Confirm password</td>
					<td>
					<input type="password" name="conpass" placeholder="enter Confirm  password" >
					</td>
				</tr>
				<tr>
					<td colspan=2 align="center">
						<button class="btn" type="submit">Submit</button>
						<button class="btn" type="reset">Clear</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>