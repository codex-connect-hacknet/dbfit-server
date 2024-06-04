<?php
// LOCATED IN THIS IP: 203.120.56.78

$servername = "fitness-up-server";
$username = "admin";
$password = "fitwnesswupserwver";
$dbname = "fitnessup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close connection
$conn->close();
?>
