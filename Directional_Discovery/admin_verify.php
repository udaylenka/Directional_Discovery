<?php
$email = $_POST["username"];
$password = $_POST["password"];

if ($email == "uday@gmail.com" && $password == "uday") {
	// Credentials are correct, redirect to admin game page
	header("Location: agame.html");
	exit();
} else {
	// Credentials are incorrect, show alert message
	echo "<script>alert('Invalid email or password');</script>";
	echo "<script>window.history.back();</script>";
	exit();
}
?>
