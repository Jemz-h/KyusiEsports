<?php
// Database credentials
$servername = "localhost"; // or your server IP
$username = "jemz"; // your database username
$password = "jemz"; // your database password
$dbname = "jemz"; // your database name

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