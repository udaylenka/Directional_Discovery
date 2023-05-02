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

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  dob DATE NOT NULL,
  email VARCHAR(50) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  password VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

// Insert user data into the database
$name = $_POST["name"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];

$sql = "INSERT INTO users (name, dob, email, phone, password)
        VALUES ('$name', '$dob', '$email', '$phone', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

// Redirect to login page
header("Location: user.php");
exit();
?>
