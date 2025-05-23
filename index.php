<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link id="lightThemeStylesheet" rel="stylesheet" href="light-mode.css">
    <link id="darkThemeStylesheet" rel="stylesheet" href="dark-mode.css" disabled>
    
    <title>Homepage</title>
</head>
<body>

  <!-- Pulls the header and sidebar into the page -->
  <?php include('includes/light-header.inc.php'); ?>
  <?php include('includes/light-sidebar.inc.php'); ?>

  <div>
    <div class="content">
      <!-- Main content of the page -->

      <h2 class="Index-H2">3D Printing Made</h2>
      <h1 class="Index">ACCESSIBLE</h1>
      <p class="Index-P"> Shop our 3D prints without hassle - every aspect of our website <br> has been accessible with a site of features</p>
      <img class="Index-Image" src="Images/Index.jpg" alt="">
    </div>
  </div>

<!-- The accessibility container-->
  <div class="container-sections">
    <div class="section">
      <hr>
      <img src="Images/W3schools.png.svg" alt="Accessibility Lead Icon" class="accessibility-icon">
      <h3>Accessibility Lead</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="section">
        <hr>
        <img src="Images/Vector.svg" alt="Accessibility Lead Icon" class="accessibility-icon">
        <h3>Accessibility Lead</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="section">
        <hr>
        <img src="Images/Vector-1.svg" alt="Accessibility Lead Icon" class="accessibility-icon">
        <h3>Accessibility Lead</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="section">
        <hr>
        <img src="Images/Vector-2.svg" alt="Accessibility Lead Icon" class="accessibility-icon">
        <h3>Accessibility Lead</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</div>

<!-- Shop now section on the website -->
<section class="hero">
  <div class="hero-content">
    <div class="hero-header">
      <h1 class="h1-hero">Your Vision,</h1>
      <a href="prints.php" class="shop-button">SHOP NOW</a>
    </div>
    <h1 class="h1-hero">Made Accessible With Us.</h1>
    <p class="p-hero">
      We believe 3D printing should be accessible to everyone, no matter your background or experience. 
      With features designed for ease of use, we've made sure that everyone—from beginners to pros—can create with confidence.
    </p>
  </div>
</section>


  <!-- Pulls the footer into the page -->
  <?php include('includes/light-footer.inc.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="includes/scripts.inc.js"></script>
</body>
</html>