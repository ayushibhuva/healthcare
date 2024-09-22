<html>
<head>
	<link type="text/css" rel="stylesheet" href="style/style.css"> 
	</link>
</head>
<body>
<div id="container">
	<div id="header">
		<div id="logo" class="float_left">
			 <img src="image/b1.png" height="90px"></img>
		</div>
		<div id="login1" class="float_right">
		<?php
			session_start();
			if(isset($_SESSION['username']))
			{
				if($_SESSION['usertype']==0)
				{
							echo"<a href='index.php?page=logout'><img src='image/logout1.jpg' height='55px' width='55px' align='right'></a><br>";   
							echo"<a href='index.php?page=changepassword'><font size='2pt'><font color=#00bfff>changepassword....</font></a><br>";
							echo "WelCome..".$_SESSION['username'];
								
						}else 
						{
							echo"<a href='index.php?page=logout'><img src='image/logout1.jpg' height='55px' width='55px' align='right'></a><br>";   
							echo "WelCome..".$_SESSION['username'];	
						}
					}else 
					{
						echo"<a href='index.php?page=login'><img src='image/login3.png' height='90px' width='90px' align='right'></img></a>";
					}	
				?> 
				</div>
				<div id="title">
				<h1 align="center">Health Care Service</h1>
				</div>
				<div class="float_clear"></div>
		</div>
			<div id="navbar">
			<?php 
			session_start();
				
			if(isset($_SESSION['username']))
			{
				if($_SESSION['usertype']==1)
				{
					echo "<a href='index.php?page=doctor_home'>Home</a>";
					echo "<a href='index.php?page=view_registration'>View patient</a>";
					echo "<a href='index.php?page=view_appointment'>View Appointment</a>";
					echo "<a href='index.php?page=view_report'>View Report</a>";
				}
				elseif($_SESSION['usertype']==0)
				{
					echo "<a href='index.php?page=home'>Home</a>";
					echo "<a href='index.php?page=about_us'>About us</a>";
					echo "<a href='index.php?page=contact'>Contact us</a>";
					echo "<a href='index.php?page=select_city'>Find doctor</a>";
					echo "<a href='index.php?page=view_appointment'>View Appointment</a>";
					echo "<a href='index.php?page=view_patient_report'>View report</a>";
					echo "<a href='index.php?page=edit_registration'>Edit profile</a>";
					echo "<a href='index.php?page=feedback'>Feedback</a>";
													
				}
					
			}
			else
			{
				echo "<a href='index.php?page=login'>Login</a>";
			}
					
		?>
	</div>
		<div class="float_clear"></div>
		<div id="contant">
		
		

		<?php
						
			if(isset($_REQUEST['page']))
			{
				include("include/".$_REQUEST['page'].".php");
				
			}else{
				include($_REQUEST["page"]."include/login.php");
			}
		
		?>
		

		</div>
	<div id="footer">
	   Developed by:Ayushi Bhuva & Payal Makani
	</div>
</div>
</body>
</html>		
