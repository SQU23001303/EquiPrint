<?php
session_start();
require_once("config.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch the current user's cart items from the database
$sql = "SELECT id, product_name, product_price, product_image, quantity FROM cart WHERE user_id = ?";
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
    <meta charset="UTF-8">
    <title>Your Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link id="lightThemeStylesheet" rel="stylesheet" href="light-mode.css">
</head>
<body>

<?php include('includes/light-header.inc.php'); ?>
<?php include('includes/light-sidebar.inc.php'); ?>

<h2 class="cart-heading">Your Shopping Cart</h2>
<div class="container mt-5">
    <?php if (count($cart_items) > 0): ?>
        <table class="table cart-table mt-4">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price (&pound;)</th>
                    <th>Quantity</th>
                    <th>Subtotal (&pound;)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart_items as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                        <td><?php echo number_format($item['product_price'], 2); ?></td>
                        <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                        <td><?php echo number_format($item['product_price'] * $item['quantity'], 2); ?></td>
                        <td>
                            <form method="POST" action="remove_from_cart.php">
                                <input type="hidden" name="cart_id" value="<?php echo $item['id']; ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3"><strong>Total</strong></td>
                    <td colspan="2"><strong>&pound;<?php echo number_format($total, 2); ?></strong></td>
                </tr>
            </tbody>
        </table>

        <!-- Checkout Form -->
        <form method="POST" action="checkout.php">
            <button type="submit" class="btn checkout-btn">Proceed to Checkout</button>
        </form>

    <?php else: ?>
        <p class="mt-4">Your cart is currently empty.</p>
    <?php endif; ?>
</div>

<?php include('includes/light-footer.inc.php'); ?>
<script src="Includes/scripts.inc.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
