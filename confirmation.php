<?php
session_start();

// Clear basket, as order has been completed and paid for.
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
        <h2 class="mb-3">🎉 Thank You for Your Order!</h2>
        <p>Your order has been successfully placed and is now being processed.</p>
        <p>Please check your email for confirmation and future updates.</p>
        <a href="index.php" class="btn btn-primary mt-3">Return to Home</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
