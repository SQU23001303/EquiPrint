<?php
// Include the database configuration file
include('config.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") { // Check if form is submitted
    // Check if email and password are set
    if (!isset($_POST["email"]) || !isset($_POST["password"])) {
        die("Error: Missing form fields.");
    }

    // Sanitise and fetch user input
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"]; // Will be hashed before storing

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format.");
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Check if email already exists
    $checkQuery = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email already exists. Try logging in.";
    } else {
        // Insert new user into the database
        $query = "INSERT INTO users (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $email, $hashedPassword);

        if ($stmt->execute()) {
            echo "Registration successful. <a href='login.php'>Login here</a>";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>
