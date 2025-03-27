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

  <div class="dropdown-container" id="dropdownContainer">
        <button class="dropdown-button" onclick="toggleDropdown()">
            <p>What is EquiPrint?</p> <span class="icon" id="icon">+</span>
        </button>
        <div class="dropdown-content" id="dropdownContent">
            <p>EquiPrint is a 3D Printing based online e-commerce store, with a primary focus on accessibility. It was started in 2024 by three co-founders; Steve Scorse, Ben Squire and William Young. The Aim of EquiPrint is to provide users with impairments and disabilities of all kinds to be able to gain access to the wonderful world of additive manufacturing. This site features a suite of accessibility features to help users browse. Here you can shop with us and find out more.</p>
        </div>
  </div>

  <div class="dropdown-container" id="dropdownContainer">
        <button class="dropdown-button" onclick="toggleDropdown()">
            <p>How do I navigate your site if I have a disability?</p><span class="icon" id="icon">+</span>
        </button>
        <div class="dropdown-content" id="dropdownContent">
            <p>The site is easily navigable through our accessibility features. These include a sidebar that provides users with instant results when an accessibility button is clicked. This is beneficial as it eliminates the need for users to search through website settings to find the accessibility tools that best suit their needs. In addition to the sidebar, our website incorporates accessibility-friendly colors, fonts, and features to ensure readability for all customers.</p>
        </div>
  </div>
  
  <?php include('includes/light-footer.inc.php'); ?>
  <script src="scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>