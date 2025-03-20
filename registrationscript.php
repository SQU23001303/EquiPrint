<?php
// Connect to MySQL database
$mysqli = new mysqli("localhost", "root", "", "equiprint_db");

// Check database connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format'); window.location.href='register.php';</script>";
        exit();
    }

    // Hash the password before saving to the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Store data in database
    $stmt = $mysqli->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashed_password);

    if ($stmt->execute()) {
        // JavaScript alert and redirects user to homepage.
        echo "<script>
                alert('Registration successful! Welcome to Equiprint.');
                window.location.href='login.php';
              </script>";
        exit();
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='register.php';</script>";
        exit();
    }

    // Close the statement and connection
    $stmt->close();
    $mysqli->close();
}
?>
