<?php
session_start();
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

<div class="container mt-5">
    <h1>Your Shopping Cart</h1>

    <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Description</th>
                    <th>Price (&pound;)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total = 0;
                foreach ($_SESSION['cart'] as $index => $item): 
                    $total += $item['price'];
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                        <td><?php echo htmlspecialchars($item['description']); ?></td>
                        <td><?php echo number_format($item['price'], 2); ?></td>
                        <td>
                            <form method="POST" action="remove_from_cart.php">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="2"><strong>Total</strong></td>
                    <td colspan="2"><strong>&pound;<?php echo number_format($total, 2); ?></strong></td>
                </tr>
            </tbody>
        </table>

        <form method="POST" action="checkout.php">
            <button type="submit" class="btn btn-success">Proceed to Checkout</button>
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
