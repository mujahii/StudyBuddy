<?php
// Database configuration
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "studybuddy"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Set charset to utf8mb4
$conn->set_charset("utf8mb4");

?>