<script type="text/javascript" language="javascript">
function check_valid()
{
	var NameRegex=/^[A-Za-z]{1,15}$/;
	var NoRegex=/^\d{10}$/;
	var PasswordRegex=/^[A-Za-z0-9@#$%*.]{1,15}$/;
	var EnailRegex = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/; 
	
	var registration_firstname=document.frm.registration_firstname.value;
	var registration_lastname=document.frm.registration_lastname.value;
	var username=document.frm.username.value;
	var password=document.frm.password.value;
	var registration_city=document.frm.registration_city.value;
	var registration_email=document.frm.registration_email.value;
	var registration_age=document.frm.registration_age.value; 
	var registration_contactno=document.frm.registration_contactno.value;
	var registration_ans=document.frm.registration_ans.value; 

	/*var registration_age=document.frm.registration_age.value;
	var registration_contactno=document.frm.registration_contactno.value;
	var doctor_city=document.frm.doctor_city.value;
	var username=document.frm.username.value;
	var password=document.frm.password.value;
	var doctor_charge=document.frm.doctor_charge.value;*/

if(registration_firstname=="")
	{
		alert("enter your firstname");
		document.frm.registration_firstname.focus();
		return false;
	}else if(!NameRegex.test(registration_firstname))
		{
			alert("enter only charecter for firstname");
			document.frm.registration_firstname.focus();
			return false;
		}
if(registration_lastname=="")
	{
		alert("enter your registration lastname");
		document.frm.registration_lastname.focus();
		return false;
	}else if(!NameRegex.test(registration_lastname))
		{
			alert("enter only charecter for lastname");
			document.frm.registration_lastname.focus();
			return false;
		}
if(username=="")
	{
		alert("enter username");
		document.frm.username.focus();
		return false;
	}else if(!NameRegex.test(username))
		{
			alert("enter only charecter username");
			document.frm.username.focus();
			return false;
		}
if(password=="")
	{
		alert("enter password");
		document.frm.password.focus();
		return false;
	}else if(!PasswordRegex.test(password))
		{
			alert("enter only charecter password");
			document.frm.password.focus();
			return false;
		}	
if(registration_city=="")
	{
		alert("enter your city");
		document.frm.registration_city.focus();
		return false;
	}else if(!NameRegex.test(registration_city))
		{
			alert("enter only charecter city");
			document.frm.registration_city.focus();
			return false;
		}
if(registration_email=="")
	{
		alert("enter your emilid");
		document.frm.registration_email.focus();
		return false;
	}else if(!EnailRegex.test(registration_email))
		{
			alert("enter proper emailid");
			document.frm.registration_email.focus();
			return false;
	}	

if(registration_age=="")
	{
		alert("enter your age");
		document.frm.registration_age.focus();
		return false;		
	}	
if(registration_contactno=="")
	{
		alert("enter your contacno");
		document.frm.registration_contactno.focus();
		return false;
	}else if(!NoRegex.test(registration_contactno))
		{
			alert("enter only ten digit contacno");
			document.frm.registration_contactno.focus();
			return false;
	}
if(registration_ans=="")
	{
		alert("enter your answer");
		document.frm.registration_ans.focus();
		return false;		
	}else if(!NameRegex.test(registration_ans))
		{
			alert("enter only charecter");
			document.frm.registration_ans.focus();
			return false;
		}

}
</script>
<html>
<head>
		<link type="text/css" rel="stylesheet" href="style/style.css"> 
	</link>
		<title>Registration Form </title>
</head>
<body>
<div id="login">
	<form name="frm" action="action/insert_registration.php" method="POST" onsubmit="return check_valid();">
	
		<table align="center" border="8">
		<tr>
			<th colspan="2" class="title"><h2>Registration Form</h2></th>
			</tr>
			<tr>
				<td>firstname</td>
				<td><input type="text" name="registration_firstname" placeholder="enter only charecter"></td>
			</tr>
			<tr>
				<td>lastname</td>
				<td><input type="text" name="registration_lastname" placeholder="enter only charecter"></td>
			</tr>
		<tr>
			<td>username</td>
			<td><input type="text" name="username" placeholder="enter username"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password" placeholder="enter password"></td>
		</tr>
		
		<tr>
			<td>city</td>
			<td><input type="text" name="registration_city" placeholder="enter your city name"></td>
		</tr>
		<tr>
			<td>emailid</img></td>
			<td><input type="text" name="registration_email" placeholder="enter your email-id"></td>
		</tr>
		<tr>
			<td>gender</td>
			<td>male<input type="radio" name="registration_gender" value="male">
			femal<input type="radio" name="registration_gender" value="female"></td>
		</tr>
		<tr>
			<td>age</td>
			<td><input type="text" name="registration_age" placeholder="enter your age" pattern="[0-9]{2}"></td>
		</tr>
		<tr>
			<td>contactno</td>
			<td><input type="text" name="registration_contactno" placeholder="enter contact number"></td>
		</tr>
		<tr>
            <td>security que</td>
            <td><select name="registration_sec_que">
					<option>what is your hobby?</option>
			        <option>what is your favourite food?</option>
                    <option>what is your favourite movie?</option>	
               </option> </select>	
			</td>									 
	    </tr>
		<tr>
            <td>answer</td>
            <td><input type="text" name="registration_ans" placeholder="enter answer"></td>		
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

