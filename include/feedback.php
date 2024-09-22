<script type="text/javascript" language="javascript">
function check_valid()
{
	var NameRegex=/^[A-Za-z]{1,15}$/;
	var message=document.f1.message.value;
	
	if(message=="")
	{
		alert("enter your message");
		document.f1.message.focus();
		return false;
	}else if(!NameRegex.test(message))
		{
			alert("enter only charecter of feedback");
			document.f1.message.focus();
			return false;
	}
	
	
}
</script>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="style/style.css"> 
	</link>
</head>
<body>
<div id="login">
<form name="f1" action="action/insert_feedback.php"" method="POST"onsubmit="return check_valid();">
<a href="index.php?page=home"><image  class="homeimg" src="image/home.png" width="30px" height="30px"></image></a>
	<table align="center" border="8">
		<th colspan="2">Feedback</th>
	<tr>
			<td>message</td>
			<td> <input type="text" name="message" placeholder="enter only charecter"></td>
		</tr>				
		
		<tr>
			<td><button class="btn" type="submit">Submit</button></td>
			<td><button class="btn" type="clear">Clear</button></td>
		</tr>
	</table>
	</form>	
</div>	
</body>
</html>