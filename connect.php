<?php
$servername = "127.0.0.1";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit(1);
}
echo "Connected successfully";
