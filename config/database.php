<?php

$host = 'localhost'; // Database host
$username = 'your_username'; // Database username
$password = 'your_password'; // Database password
$dbname = 'your_database'; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

echo 'Connected successfully';

?>