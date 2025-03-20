<?php
//NEEDS TESTING!!!
// Connect to MySQL using MySQLi extension (Database created using XAMPP and phpMyAdmin - See README.md for details on database configuration).
$mysqli = new mysqli("localhost", "root", "", "equiprint_db");

// Checks connection to SQL database.
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data.
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Email validation.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    // Hash the password before saving to the database (For secure storage).
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Store data in database.
    $stmt = $mysqli->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashed_password);
    // Provide validation to user.
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $mysqli->close();
}
?>