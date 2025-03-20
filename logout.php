<?php
//LOGOUT SCRIPT WORKING SUCCESSFULLY. USER STARTS LOGGED IN, WHICH NEEDS TO BE RECTIFIED.
session_start();
session_destroy(); // Destroy the session
header("Location: index.php"); // Redirect to homepage
exit();
?>
