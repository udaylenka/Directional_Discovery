<?php
$host = "localhost";
$username = "Akil";
$password = "Akilamu@321";
$database = "elitud_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query the database to get all user details
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Display the user details in the HTML
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row['name'] . "<br>";
        echo "Date of Birth: " . $row['dob'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Phone Number: " . $row['phone'] . "<br>";
        echo "<br>";
    }
} else {
    echo "No users found";
}

mysqli_close($conn);
?>
