<?php
// REMOVE LATER!!!
$host = "localhost";
$username = "root"; // Default user for XAMPP
$password = ""; // Leave empty for XAMPP
$database = "equiprint_db";

// Create connection to database
$conn = new mysqli($host, $username, $password, $database);

// Check connection to database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>