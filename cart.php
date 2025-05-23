<?php
session_start();
require_once("config.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch the current user's cart items from the database
$sql = "SELECT id, product_name, product_price, quantity FROM cart WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$cart_items = [];
$total = 0;
while ($row = $result->fetch_assoc()) {
    $cart_items[] = $row;
    $total += $row['product_price'] * $row['quantity'];
}
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Your Basket - Equiprint</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link id="lightThemeStylesheet" rel="stylesheet" href="light-mode.css">
    <link id="darkThemeStylesheet" rel="stylesheet" href="dark-mode.css" disabled>
    
</head>
<body>
<?php include('includes/light-header.inc.php'); ?>
<?php include('includes/light-sidebar.inc.php'); ?>

<div class="container mt-5 centered-basket">
    <?php if (!empty($cart_items)): ?>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Heading inside the same column as the table -->
                <h2 class="text-center mb-4">Your Basket</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered shadow-sm rounded">
                        <thead class="table-light">
                            <tr>
                                <th>Product</th>
                                <th>Price (&pound;)</th>
                                <th>Quantity</th>
                                <th>Total (&pound;)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cart_items as $item): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                                    <td><?php echo number_format($item['product_price'], 2); ?></td>
                                    <td><?php echo (int)$item['quantity']; ?></td>
                                    <td><?php echo number_format($item['product_price'] * $item['quantity'], 2); ?></td>
                                    <td>
                                        <form method="POST" action="remove_from_cart.php" class="d-inline">
                                            <input type="hidden" name="cart_id" value="<?php echo $item['id']; ?>">
                                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-end"><strong>Total</strong></td>
                                <td colspan="2"><strong>&pound;<?php echo number_format($total, 2); ?></strong></td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-center">
                                    <a href="checkout.php" class="btn btn-success btn-lg mt-2">Proceed to Checkout</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-info text-center mt-4">
            <h2>Your Basket</h2>
            <p>Your basket is currently empty.</p>
        </div>
    <?php endif; ?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="includes/scripts.inc.js"></script>
</body>
</html>
