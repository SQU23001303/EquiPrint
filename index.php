<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Homepage</title>
</head>
<body>

  <?php include('includes/light-header.inc.php'); ?>
  <?php include('includes/light-sidebar.inc.php'); ?>
  <br>

  <div>
    <div class="content">
      <!-- Main content of the page -->

      <H2 class="Index-H2"> 3D Printing Made </H2>
      <h1 class="Index">ACCESSIBLE</h1>
      <p class="Index-P"> Shop our 3D prints without hassle - every aspect of our website <br> has been accessible with a site of features</p>
      <img class="Index-Image" src="Images/Index.jpg" alt="">
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
</div>

  
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>