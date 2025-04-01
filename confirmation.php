<?php
session_start();

// Fetch recent order info from session
$order_id = $_SESSION['recent_order_id'] ?? null;
$order_date = $_SESSION['recent_order_date'] ?? date("Y-m-d");

// Clear basket session (if used previously)
unset($_SESSION['basket']);

// Clear recent order session vars so they aren't reused on refresh
unset($_SESSION['recent_order_id'], $_SESSION['recent_order_date']);

// Estimate delivery (3 to 5 weekdays from order date)
$estimated_delivery = date("l, jS F Y", strtotime($order_date . ' +4 weekdays'));

// Fallback if page was accessed without order session
if (!$order_id) {
    header("Location: index.php");
    exit();
}
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
    <div class="alert alert-success p-4 shadow-sm rounded" style="max-width: 700px; margin: 0 auto;">
        <h2 class="mb-3">🎉 Thank You for Your Order!</h2>
        <p>Your order has been successfully placed and is now being processed.</p>

        <hr>

        <h5 class="mt-3">Order Number:</h5>
        <p><strong>#<?php echo htmlspecialchars($order_id); ?></strong></p>

        <h5 class="mt-3">Estimated Delivery Date:</h5>
        <p><strong><?php echo htmlspecialchars($estimated_delivery); ?></strong></p>

        <p class="mt-4">Please check your email for confirmation and future updates.</p>

        <a href="orders.php" class="btn btn-outline-primary mt-3">View My Orders</a>
        <a href="index.php" class="btn btn-primary mt-3 ms-2">Return to Home</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
