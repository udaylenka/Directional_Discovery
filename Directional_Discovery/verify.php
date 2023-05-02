<?php
$host = "localhost";
$username = "Akil";
$password = "Akilamu@321";
$database = "elitud_db";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get user input
$username = $_POST["username"];
$password = $_POST["password"];

// Validate user credentials
$sql = "SELECT * FROM users WHERE email='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // User credentials are correct, redirect to game page
  header("Location: game.html");
  exit();
} else {
  // User credentials are incorrect, show alert message
  echo "<script>alert('Invalid username or password');</script>";
  header("Location: user.php");
}

// Close connection
mysqli_close($conn);
?>
