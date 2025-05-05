<!-- Navbar.php -->
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start session only if one isn't already active
}
?>
<br>
<div class="nav-bar">
    <!-- Logo Section -->
    <a href="index.php" class="logo">
        <img src="Images/EquiPrint_Logo_Light_svg.svg" alt="EquiPrint Logo">
    </a>
    <h1><a href="index.php">EquiPrint</a></h1>

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="nav-item"><a class="nav-link" href="prints.php">PRINTS</a></li>
                <li class="nav-item"><a class="nav-link" href="about-us.php">ABOUT US</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
                <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
                <li class="nav-item d-lg-none mt-2">
                    <a href="cart.php" class="navbar-img">
                        <img src="Images/Cart Icon.svg" alt="Shopping Basket">
                    </a>
                    <br>
                </li>

                <!-- Authentication Buttons for Mobile -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item d-lg-none mt-2">
                        <a href="logout.php" class="auth-btn logout-btn w-100">Logout</a>
                    </li>
                    <br>
                <?php else: ?>
                    <li class="nav-item d-lg-none mt-2">
                        <a href="register.php" class="auth-btn register-btn w-100">Register</a>
                    </li>
                    <br>
                    <li class="nav-item d-lg-none mt-2">
                        <a href="login.php" class="auth-btn login-btn w-100">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Cart Icon for Desktop -->
    <div class="d-none d-lg-block">
        <a href="cart.php" class="navbar-img" aria-label="Cart">
            <img src="Images/CartIcon.png" alt="Shopping Basket">
        </a>
    </div>

    <!-- Authentication Buttons for Desktop -->
    <div class="d-none d-lg-block">
        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- Show Logout button for logged-in users -->
            <a href="logout.php" class="auth-btn logout-btn">Logout</a>
        <?php else: ?>
            <!-- Show Register and Login buttons for guests -->
            <a href="register.php" class="auth-btn register-btn">Register</a>
            <a href="login.php" class="auth-btn login-btn">Login</a>
        <?php endif; ?>
    </div>
</div>
<br>
