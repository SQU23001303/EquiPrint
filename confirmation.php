<?php
session_start();
require_once("config.php");

// Validate order ID from query parameter
if (!isset($_GET['order_id']) || !is_numeric($_GET['order_id'])) {
    header("Location: index.php");
    exit();
}

$order_id = intval($_GET['order_id']);
$user_id = $_SESSION['user_id'] ?? null;

if (!$user_id) {
    header("Location: login.php");
    exit();
}

// Fetch the order to ensure it belongs to the logged-in user
$stmt = $conn->prepare("SELECT full_name, created_at FROM orders WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $order_id, $user_id);
$stmt->execute();
$result = $stmt->get_result();
$order = $result->fetch_assoc();
$stmt->close();

if (!$order) {
    echo "Order not found or access denied.";
    exit();
}

// Estimate delivery: 5 business days from order creation
$order_date = new DateTime($order['created_at']);
$estimated_delivery = $order_date->modify('+5 weekdays')->format('l, jS F Y');

// Clear any residual basket session data
unset($_SESSION['basket']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation - Equiprint</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="light-mode.css">
</head>
<body>

<?php include('includes/light-header.inc.php'); ?>
<?php include('includes/light-sidebar.inc.php'); ?>

<div class="container mt-5 text-center">
    <div class="alert alert-success p-4 shadow-sm rounded" style="max-width: 600px; margin: 0 auto;">
        <h2 class="mb-3">Thank You for Your Order, <?php echo htmlspecialchars($order['full_name']); ?>!</h2>
        <p>Your order has been placed successfully.</p>
        <hr>
        <p><strong>Order Number:</strong> #<?php echo $order_id; ?></p>
        <p><strong>Estimated Delivery:</strong> <?php echo $estimated_delivery; ?></p>
        <p>Please check your email for confirmation and future updates.</p>
        <a href="index.php" class="btn btn-primary mt-3">Return to Home</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
