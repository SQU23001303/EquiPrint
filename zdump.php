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