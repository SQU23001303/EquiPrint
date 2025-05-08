<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link id="lightThemeStylesheet" rel="stylesheet" href="light-mode.css">
    <link id="darkThemeStylesheet" rel="stylesheet" href="dark-mode.css" disabled>

    <title>Contact</title>
</head>
<body>
  <!-- Pulls the header and sidebar into the site -->
  <?php include('includes/light-header.inc.php'); ?>
  <?php include('includes/light-sidebar.inc.php'); ?>
  
    <!-- Contact container -->
    <div class="contact-container">
      <h1 class="contact-h1">Contact</h1>
      <p class="contact-headerp">We are here to help! Get in contact with us below either by Email or Discord. We will try to get back to you ASAP!</p>
      
      <div class="contact-options text-black">
          <div class="contact-box">
              <h2 class="contact-h2">Email Us</h2>
              <p class="contact-p">Have any questions or inquiries? We'd love to hear from you! Send us an email and we'll get back to you as soon as possible.</p>
              <a href="mailto:contact@youremail.com" class="button contact-button">Click Here</a>
          </div>
          <div class="contact-box">
              <h2>Join Our Discord</h2>
              <p>Be part of the conversation! Connect with us on Discord to chat, get updates, and engage with like-minded people.</p>
              <a href="https://discord.gg/your-invite-code" class="button contact-button" target="_blank" rel="noopener">Join Here</a>
          </div>
      </div>
  </div>



  <!-- Pulls the footer into the website -->
  <?php include('includes/light-footer.inc.php'); ?>
  <script src="Includes/scripts.inc.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>