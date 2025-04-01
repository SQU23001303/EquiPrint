<?php
session_start();
require_once("config.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch cart items
$stmt = $conn->prepare("SELECT product_name, product_price, quantity FROM cart WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$cart_items = [];
$total_price = 0;
while ($row = $result->fetch_assoc()) {
    $cart_items[] = $row;
    $total_price += $row['product_price'] * $row['quantity'];
}
$stmt->close();

// Handle checkout on form submission
$checkout_success = false;
$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($cart_items)) {
    $payment_method = $_POST['payment_method'] ?? "Credit Card";
    $full_name = $_POST['full_name'] ?? '';
    $address = $_POST['address'] ?? '';
    $city = $_POST['city'] ?? '';
    $postcode = $_POST['postcode'] ?? '';
    $country = $_POST['country'] ?? '';

    $conn->begin_transaction();

    try {
        // Insert into orders
        $insert_order = $conn->prepare(
            "INSERT INTO orders (user_id, total_price, payment_method, full_name, address, city, postcode, country) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $insert_order->bind_param("idssssss", $user_id, $total_price, $payment_method, $full_name, $address, $city, $postcode, $country);
        $insert_order->execute();
        $order_id = $insert_order->insert_id;
        $insert_order->close();

        // Insert order items
        $insert_item = $conn->prepare("INSERT INTO order_items (order_id, product_name, product_price, quantity) VALUES (?, ?, ?, ?)");
        foreach ($cart_items as $item) {
            $insert_item->bind_param("isdi", $order_id, $item['product_name'], $item['product_price'], $item['quantity']);
            $insert_item->execute();
        }
        $insert_item->close();

        // Clear cart
        $clear_cart = $conn->prepare("DELETE FROM cart WHERE user_id = ?");
        $clear_cart->bind_param("i", $user_id);
        $clear_cart->execute();
        $clear_cart->close();

        $conn->commit();
        $checkout_success = true;
    } catch (Exception $e) {
        $conn->rollback();
        $error_message = "Checkout failed: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout - Equiprint</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="light-mode.css">
</head>
<body>
<?php include('includes/light-header.inc.php'); ?>
<?php include('includes/light-sidebar.inc.php'); ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Checkout</h2>

    <?php if ($checkout_success): ?>
        <div class="alert alert-success text-center">
            <h4>Thank you for your order!</h4>
            <p>Your order has been successfully placed.</p>
            <a href="orders.php" class="btn btn-primary mt-3">View Orders</a>
        </div>
    <?php elseif (!empty($cart_items)): ?>
        <form method="POST" class="border rounded p-4 shadow-sm" style="max-width: 800px; margin: 0 auto;">
            <h5>Order Summary</h5>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price (&pound;)</th>
                        <th>Quantity</th>
                        <th>Subtotal (&pound;)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart_items as $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                            <td><?php echo number_format($item['product_price'], 2); ?></td>
                            <td><?php echo (int)$item['quantity']; ?></td>
                            <td><?php echo number_format($item['product_price'] * $item['quantity'], 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3" class="text-end"><strong>Total</strong></td>
                        <td><strong>&pound;<?php echo number_format($total_price, 2); ?></strong></td>
                    </tr>
                </tbody>
            </table>

            <h5 class="mt-4">Shipping Information</h5>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" name="full_name" id="full_name" class="form-control" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" id="city" class="form-control" required>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="postcode" class="form-label">Postcode</label>
                    <input type="text" name="postcode" id="postcode" class="form-control" required>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" id="country" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="payment_method" class="form-label">Select Payment Method:</label>
                <select name="payment_method" id="payment_method" class="form-select" required>
                    <option value="Credit Card" selected>Credit Card</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Place Order</button>
            </div>
        </form>
    <?php else: ?>
        <div class="alert alert-warning text-center">
            <p>Your cart is empty.</p>
            <a href="prints.php" class="btn btn-primary">Return to Prints</a>
        </div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
