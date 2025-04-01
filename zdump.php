<div class="container-sections">
    <div class="section">
      <hr>
        <h2 >Title 1</h2>
        <p>Small amount of text here.</p>
    </div>
    <div class="section">
        <hr>
        <h2>Title 2</h2>
        <p>Small amount of text here.</p>
    </div>
    <div class="section">
        <hr>
        <h2>Title 3</h2>
        <p>Small amount of text here.</p>
    </div>
    <div class="section">
        <hr>
        <h2>Title 4</h2>
        <p>Small amount of text here.</p>
    </div>
</div>


    <!-- CHANGES HERE -->
  <div class="accessibility-container">
    <div class="accessibility-box">
        <img src="path/to/your/icon1.png" alt="Accessibility Lead Icon" class="accessibility-icon">
        <h3>Accessibility Lead</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="accessibility-box">
        <img src="path/to/your/icon2.png" alt="File Alt Icon" class="accessibility-icon">
        <h3>Accessibility Lead</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="accessibility-box">
        <img src="path/to/your/icon3.png" alt="Check Circle Icon" class="accessibility-icon">
        <h3>Accessibility Lead</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    <!-- New added box -->
    <div class="accessibility-box">
        <img src="path/to/your/icon4.png" alt="New Icon" class="accessibility-icon">
        <h3>New Header</h3>
        <p>New paragraph text goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>







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
          <li class="nav-item d-lg-none mt-2">
            <button class="login-btn w-100">Login</button>
          </li>
        </ul>
      </div>
    </nav>

    <div class="d-none d-lg-block">
      <button class="navbar-img" aria-label="">
        <img src="Images/CartIcon.png" alt="Shopping Basket">
      </button>
    </div>
    <!-- Login Button Outside for Desktop -->
    <div class="d-none d-lg-block">
      <button class="login-btn">Login</button>
    </div>
  </div>
  <br>
</div>



<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
  </div>

  <!-- Registration Form -->
  <main class="form-signin w-100 m-auto">
    <!-- POST method required for the registration php script. -->
    <form action="register.php" method="POST">
    <img class="mb-4" src="Images/EquiPrint_Logo_Light_svg.svg" alt="Equiprint Logo" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Create an account <br> with us!</h1>

    <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" required placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" required placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>

    <button class="btn register-btn w-100 py-2" type="submit" name="register">Register account</button>
</form>
  </main>




    <!-- Main content of the page -->
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
  </div>

  <!-- Login Form -->
  <main class="form-signin w-100 m-auto">
    <form>
      <img class="mb-4" src="Images/EquiPrint_Logo_Light_svg.svg" alt="Equiprint Logo" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div>
      <!-- Reused register button styling. -->
      <button class="btn register-btn w-100 py-2" type="submit">Sign in</button>
    </form>
  </main>



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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link id="lightThemeStylesheet" rel="stylesheet" href="light-mode.css">
    <link id="darkThemeStylesheet" rel="stylesheet" href="dark-mode.css" disabled>

    <title>Prints</title>
</head>
<body>
  
  <?php include('includes/light-header.inc.php'); ?>
  <?php include('includes/light-sidebar.inc.php'); ?>

  <div class="contact-container">
        <h1 class="contact-h1">Print Library</h1>
        <p class="contact-headerp">View our library of 3D-Prints below, superb quality and made by a suite of talented individuals.</p>
  </div>

  <section class="product-grid">
    <div class="product-card">
        <img src="Images/ProductImages/knight1.webp" alt="Knight 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Knight 1 Statue</h2>
            <div class="product-description">
              <p>Intricate Fantasy-themed knight, clad in steel armor with 2.5" inch base. Includes Armour Set and Blade.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="product-card">
        <img src="Images/ProductImages/Wizard1.webp" alt="Wizard 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Wizard 1 Statue</h2>
            <div class="product-description">
              <p>Enchanting High-Fantasy inspired Wizard, wearing flowing robes and Wooden Mage Staff. 2.5" base, comes with Staff.</p>
            </div>
              <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="product-card">
        <img src="Images/ProductImages/Knight2.webp" alt="Knight 2 Statue" class="product-image">
        <div class="product-info">
            <h2>Knight 2 Statue</h2>
            <div class="product-description">
              <p>Fierce and intimidating Fantasy inspired Knight, with Heavy Armor 2.5" base. Comes with Sword and Shield.</p>
            </div>
              <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="product-card">
        <img src="Images/ProductImages/Assassin1.webp" alt="Assassin 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Assassin 1 Statue</h2>
            <div class="product-description">
              <p>Intricate Fantasy-themed assassin, clad in a dark hooded cloak and light armor, posed dynamically on a 2.5" inch base. Includes Dual Daggers.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>



    <div class="product-card">
        <img src="Images/ProductImages/Mage1.webp" alt="Mage 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Mage 1 Statue</h2>
            <div class="product-description">
              <p>Mystical fantasy-themed mage, draped in enchanted robes with arcane symbols, standing atop a 2.5” inch base. Includes Spellbook.</p>
            </div>
              <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="product-card">
        <img src="Images/ProductImages/Elven1.webp" alt="Elven 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Elven 1 Statue</h2>
            <div class="product-description">
              <p>Elegant fantasy-themed elven warrior, clad in silver armour with a flowing blue cape, standing on a 2.5” inch base. Includes Enchanted Bow.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="product-card">
        <img src="Images/ProductImages/Elven2.webp" alt="Elven 2 Statue" class="product-image">
        <div class="product-info">
            <h2>Elven 2 Statue</h2>
            <div class="product-description">
              <p>Elegant fantasy-themed elf, clad in finely crafted silver armour with a flowing cloak, posed on a 2.5” inch base. Includes Elven Blade.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="product-card">
        <img src="Images/ProductImages/Knight3.webp" alt="Knight 3 Statue" class="product-image">
        <div class="product-info">
            <h2>Knight 3 Statue</h2>
            <div class="product-description">
              <p>Divine fantasy-themed knight, clad in radiant gold and silver armour with a flowing white cape, standing resolute on a 2.5” inch base. Includes Blessed Warhammer</p>
            </div>
              <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>



    <div class="product-card">
        <img src="Images/ProductImages/Cyberpunk1.webp" alt="Cyberpunk Bounty 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Cyberpunk 1 Statue</h2>
            <div class="product-description">
              <p>A sleek, high-tech bounty hunter with a robotic arm, a cybernetic eye, and a long trench coat lined with LED circuits.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="product-card">
        <img src="Images/ProductImages/Steampunk1.webp" alt="Steampunk 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Steampunk 1 Statue</h2>
            <div class="product-description">
              <p>A Victorian-era adventurer dressed in a long coat with brass buttons, a high collar, and a pair of goggles resting on their top hat.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="product-card">
        <img src="Images/ProductImages/Alien1.webp" alt="Alien 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Alien 1 Statue</h2>
            <div class="product-description">
              <p>A reptilian humanoid warrior with scaled armor, clawed hands, and an elongated head with a crest running down its back.</p>
            </div>
              <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="product-card">
        <img src="Images/ProductImages/Sorcerer1.webp" alt="Sorcerer 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Sorcerer 1 Statue</h2>
            <div class="product-description">
              <p>A hooded sorcerer with tattered robes, holding a twisted staff with a glowing crystal at the top.</p>
            </div>
              <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    
  </section>

  <?php include('includes/light-footer.inc.php'); ?>
  <script src="Includes/scripts.inc.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>