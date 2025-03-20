<!-- navbar.php -->
<br>
<div class="nav-bar">
    <!-- Logo Section -->
    <a href="index.php" class="logo">
      <img src="Images/EquiPrint_Logo_Light_svg.svg" alt="EquiPrint Logo">
    </a>
    <h1><a href="index.php">EquiPrint</a></h1>

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="prints.php">PRINTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.php">ABOUT&nbsp;US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
          </li>
          <li class="nav-item d-lg-none mt-2">
            <button class="navbar-img" aria-label="">
              <img src="Images/Cart Icon.svg" alt="Shopping Basket">
            </button>
          </li>

          <!-- Register and Login Buttons for Mobile -->
          <li class="nav-item d-lg-none mt-2">
            <a href="register.php" class="auth-btn register-btn w-100">Register</a>
          </li>
          <li class="nav-item d-lg-none mt-2">
            <a href="login.php" class="auth-btn login-btn w-100">Login</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Cart Icon for Desktop -->
    <div class="d-none d-lg-block">
      <button class="navbar-img" aria-label="">
        <img src="Images/CartIcon.png" alt="Shopping Basket">
      </button>
    </div>

    <!-- Register and Login Buttons for Desktop -->
    <div class="d-none d-lg-block">
      <a href="register.php" class="auth-btn register-btn">Register</a>
    </div>
    
    <div class="d-none d-lg-block">
      <a href="login.php" class="auth-btn login-btn">Login</a>
    </div>
</div>
<br>
