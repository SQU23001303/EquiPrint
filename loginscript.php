<?php
//LOGIN SCRIPT NOW FUNCTIONING CORRECTLY. LANDING PAGE STILL NEEDS CONFIGURING.
session_start(); // Start a session to store user data once logged in.

// Connect to MySQL database
$mysqli = new mysqli("localhost", "root", "", "equiprint_db");

// Checks connection to SQL database.
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data.
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if entered email exists in the database.
    $stmt = $mysqli->prepare("SELECT id, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // If the email exists.
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        
        // Verifies the password with the hashed one stored in the database.
        if (password_verify($password, $user['password'])) {
            // Password is correct, start a session and log in user.
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];

            // Redirect to a logged-in page (user profile/dashboard - NEEDS TO BE CONFIGURED).
            header("Location: index.php"); 
            exit();
        } else {
            // Incorrect password.
            echo "Invalid email or password!";
        }
    } else {
        // Email not found in database.
        echo "Invalid email or password!";
    }

    // Close the statement and connection.
    $stmt->close();
    $mysqli->close();
}
?>