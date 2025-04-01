<?php
session_start();
require_once("config.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    // Check if item already exists in cart (prevents duplicates)
    $stmt = $conn->prepare("SELECT id, quantity FROM cart WHERE user_id = ? AND product_name = ?");
    $stmt->bind_param("is", $user_id, $product_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // If exists, increase quantity by 1
        $row = $result->fetch_assoc();
        $new_quantity = $row['quantity'] + 1;
        $update_stmt = $conn->prepare("UPDATE cart SET quantity = ? WHERE id = ?");
        $update_stmt->bind_param("ii", $new_quantity, $row['id']);
        $update_stmt->execute();
        $update_stmt->close();
    } else {
        // IAdd item to cart
        $stmt = $conn->prepare("INSERT INTO cart (user_id, product_name, product_price, product_image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isds", $user_id, $product_name, $product_price, $product_image);
        $stmt->execute();
    }

    $stmt->close();
    $conn->close();

    header("Location: prints.php?added=success");
    exit();
}
?>
