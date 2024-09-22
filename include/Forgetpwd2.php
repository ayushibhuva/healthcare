<script type="text/javascript"language="javascript">
function check_valid()
{
	var NameRegex=/^[A-Za-z]{1,15}$/;
	var sequerityaws=document.frmforgetpwd2.sequerityaws.value;
	if(sequerityaws=="")
	{
		alert("Enter your answer");
		document.frmforgetpwd2.sequerityaws.focus();
		return false;
	}
	else if(!NameRegex.test(sequerityaws))
	{
		alert("Enter answer only character");
		document.frmforgetpwd2.sequerityaws.focus();
		return false;
	}
</script>
<?php
		include("action/dbconnection.php");
		$registration_id=$_REQUEST['registration_id'];
		if(isset($registration_id))
		{
			 $query="select * from registration where registration_id=$registration_id";
			$res=mysql_query($query,$con);
			
			if($row=mysql_fetch_array($res))
			{
				 $registration_sec_que=$row['registration_sec_que'];
			}
		}
?>
<html>
<body>
		<div id="login">
			<form name="frmforgetpwd2" action="action/forget2.php" onsubmit="return check_valid();">
				<?php
					if(isset($_REQUEST['msg']))
					{
						if($_REQUEST['msg']==1)
						{
							echo"<center><font color='red'><h2>Incorrect answer</h2><font></center>";
						}
						else
						{
							echo"<center><h1>you are right</h1></center>";
						}
						echo"<br>";
					}
?>
<center>
<input type='hidden'name="registration_id"value='<?php echo $registration_id;?>'>
<table  border="10" >
						<tr>
							<th colspan=2 class="th" >Forgot password</th>
						</tr>
						<tr>
						<td>security que</td>
						<td><input type="text" name="registration_ans" value="<?php echo $registration_sec_que; ?>">
						</td>									 
						</tr>
           
						
							<tr>
							<td>Answer</td>
							<td>
								<input type="text"name="registration_ans">
							</td>
							</tr>
							<tr>
				<td colspan=2 align="center">
					<button class="btn" type="submit">Submit</button>
					<button class="btn" type="reset">Clear</button>
				</td>
								
			</table>
		</center>
		</div>
	</form>
</body>
</html>			