<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>FAQ</title>
</head>
<body>
  
  <?php include('includes/light-header.inc.php'); ?>
  <?php include('includes/light-sidebar.inc.php'); ?>
  
  <div class="contact-container">
        <h1 class="contact-h1">FAQ</h1>
        <p class="contact-headerp">Got questions? We've got answers! Check out our FAQ below or reach out to us via Email or Discord.</p>   
  </div>

  <div class="dropdown">
        <button class="dropdown-button" onclick="toggleDropdown()">Join our Discord</button>
        <div class="dropdown-content" id="dropdownContent">
            <p>Click the link to join: <a href="https://discord.com/invite/example" target="_blank">Join Now</a></p>
        </div>
  </div>

  
  <?php include('includes/light-footer.inc.php'); ?>
  <script src="scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>