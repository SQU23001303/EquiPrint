<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link id="lightThemeStylesheet" rel="stylesheet" href="light-mode.css">
    <link id="darkThemeStylesheet" rel="stylesheet" href="dark-mode.css" disabled>

    <title>About-Us</title>
</head>

<body>
  
  <?php include('includes/light-header.inc.php'); ?>
  <?php include('includes/light-sidebar.inc.php'); ?>
  <section class="about-section">
        <h1>About Us</h1>
        <p>Meet the dedicated experts and why we do what we do.</p>

        <div class="team-container">
            <div class="team-card">
                <img src="Images/Steve.jpg" alt="Steve Scorse">
                <div class="team-text">
                    <h2>STEVE SCORSE</h2>
                    <h3>Co-Founder & Creative Director</h3>
                    <p>Steve brings the creative spark to the team, ensuring our 3D printing tools are intuitive and user-friendly.</p>
                </div>
            </div>

            <div class="team-card">
                <img src="Images/Ben.jpg" alt="Ben Squire">
                <div class="team-text">
                    <h2>BEN SQUIRE</h2>
                    <h3>Co-Founder & Developer</h3>
                    <p>Ben focuses on making sure our platform is intuitive, efficient, and accessible for all users.</p>
                </div>
            </div>

            <div class="team-card">
                <img src="Images/Will.jpg" alt="Will Young">
                <div class="team-text">
                    <h2>WILL YOUNG</h2>
                    <h3>Co-Founder & Developer</h3>
                    <p>Will ensures our applications run smoothly, providing the best experience possible for our users.</p>
                </div>
            </div>
        </div>
    </section>


  <?php include('includes/light-footer.inc.php'); ?>
  <script src="Includes/scripts.inc.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>