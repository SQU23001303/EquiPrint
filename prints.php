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
  
    <!-- Pulls the Header and siderbar into the page-->
  <?php include('includes/light-header.inc.php'); ?>
  <?php include('includes/light-sidebar.inc.php'); ?>

  <!-- Print container title -->
  <div class="contact-container">
        <h1 class="contact-h1">Print Library</h1>
        <p class="contact-headerp">View our library of 3D-Prints below, superb quality and made by a suite of talented individuals.</p>
  </div>

  <section class="product-grid">
    <!-- Knight 1 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/knight1.webp" alt="Knight 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Knight 1 Statue</h2>
            <div class="product-description">
                <p>Intricate Fantasy-themed knight, clad in steel armor with 2.5" inch base. Includes Armour Set and Blade.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Knight 1 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="Intricate Fantasy-themed knight, clad in steel armor with 2.5&quot; inch base. Includes Armour Set and Blade.">
                <input type="hidden" name="product_image" value="Images/ProductImages/knight1.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>

    <!-- Wizard 1 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/Wizard1.webp" alt="Wizard 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Wizard 1 Statue</h2>
            <div class="product-description">
                <p>Enchanting High-Fantasy inspired Wizard, wearing flowing robes and Wooden Mage Staff. 2.5" base, comes with Staff.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Wizard 1 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="Enchanting High-Fantasy inspired Wizard, wearing flowing robes and Wooden Mage Staff. 2.5&quot; base, comes with Staff.">
                <input type="hidden" name="product_image" value="Images/ProductImages/Wizard1.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>

    <!-- Knight 2 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/Knight2.webp" alt="Knight 2 Statue" class="product-image">
        <div class="product-info">
            <h2>Knight 2 Statue</h2>
            <div class="product-description">
                <p>Fierce and intimidating Fantasy inspired Knight, with Heavy Armor 2.5" base. Comes with Sword and Shield.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Knight 2 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="Fierce and intimidating Fantasy inspired Knight, with Heavy Armor 2.5&quot; base. Comes with Sword and Shield.">
                <input type="hidden" name="product_image" value="Images/ProductImages/Knight2.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>

    <!-- Assassin 1 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/Assassin1.webp" alt="Assassin 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Assassin 1 Statue</h2>
            <div class="product-description">
                <p>Intricate Fantasy-themed assassin, clad in a dark hooded cloak and light armor, posed dynamically on a 2.5" inch base. Includes Dual Daggers.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Assassin 1 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="Intricate Fantasy-themed assassin, clad in a dark hooded cloak and light armor, posed dynamically on a 2.5&quot; inch base. Includes Dual Daggers.">
                <input type="hidden" name="product_image" value="Images/ProductImages/Assassin1.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>

    <!-- Mage 1 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/Mage1.webp" alt="Mage 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Mage 1 Statue</h2>
            <div class="product-description">
                <p>Mystical fantasy-themed mage, draped in enchanted robes with arcane symbols, standing atop a 2.5” inch base. Includes Spellbook.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Mage 1 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="Mystical fantasy-themed mage, draped in enchanted robes with arcane symbols, standing atop a 2.5” inch base. Includes Spellbook.">
                <input type="hidden" name="product_image" value="Images/ProductImages/Mage1.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>

    <!-- Elven 1 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/Elven1.webp" alt="Elven 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Elven 1 Statue</h2>
            <div class="product-description">
                <p>Elegant fantasy-themed elven warrior, clad in silver armour with a flowing blue cape, standing on a 2.5” inch base. Includes Enchanted Bow.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Elven 1 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="Elegant fantasy-themed elven warrior, clad in silver armour with a flowing blue cape, standing on a 2.5” inch base. Includes Enchanted Bow.">
                <input type="hidden" name="product_image" value="Images/ProductImages/Elven1.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>

    <!-- Elven 2 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/Elven2.webp" alt="Elven 2 Statue" class="product-image">
        <div class="product-info">
            <h2>Elven 2 Statue</h2>
            <div class="product-description">
                <p>Elegant fantasy-themed elf, clad in finely crafted silver armour with a flowing cloak, posed on a 2.5” inch base. Includes Elven Blade.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Elven 2 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="Elegant fantasy-themed elf, clad in finely crafted silver armour with a flowing cloak, posed on a 2.5” inch base. Includes Elven Blade.">
                <input type="hidden" name="product_image" value="Images/ProductImages/Elven2.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>

    <!-- Knight 3 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/Knight3.webp" alt="Knight 3 Statue" class="product-image">
        <div class="product-info">
            <h2>Knight 3 Statue</h2>
            <div class="product-description">
                <p>Divine fantasy-themed knight, clad in radiant gold and silver armour with a flowing white cape, standing resolute on a 2.5” inch base. Includes Blessed Warhammer</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Knight 3 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="Divine fantasy-themed knight, clad in radiant gold and silver armour with a flowing white cape, standing resolute on a 2.5” inch base. Includes Blessed Warhammer">
                <input type="hidden" name="product_image" value="Images/ProductImages/Knight3.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>

    <!-- Cyberpunk 1 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/Cyberpunk1.webp" alt="Cyberpunk 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Cyberpunk 1 Statue</h2>
            <div class="product-description">
                <p>A sleek, high-tech bounty hunter with a robotic arm, a cybernetic eye, and a long trench coat lined with LED circuits.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Cyberpunk 1 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="A sleek, high-tech bounty hunter with a robotic arm, a cybernetic eye, and a long trench coat lined with LED circuits.">
                <input type="hidden" name="product_image" value="Images/ProductImages/Cyberpunk1.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>

    <!-- Steampunk 1 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/Steampunk1.webp" alt="Steampunk 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Steampunk 1 Statue</h2>
            <div class="product-description">
                <p>A Victorian-era adventurer dressed in a long coat with brass buttons, a high collar, and a pair of goggles resting on their top hat.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Steampunk 1 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="A Victorian-era adventurer dressed in a long coat with brass buttons, a high collar, and a pair of goggles resting on their top hat.">
                <input type="hidden" name="product_image" value="Images/ProductImages/Steampunk1.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>

    <!-- Alien 1 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/Alien1.webp" alt="Alien 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Alien 1 Statue</h2>
            <div class="product-description">
                <p>A reptilian humanoid warrior with scaled armor, clawed hands, and an elongated head with a crest running down its back.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Alien 1 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="A reptilian humanoid warrior with scaled armor, clawed hands, and an elongated head with a crest running down its back.">
                <input type="hidden" name="product_image" value="Images/ProductImages/Alien1.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>

    <!-- Sorcerer 1 Statue -->
    <form method="POST" action="add-to-cart.php" class="product-card">
        <img src="Images/ProductImages/Sorcerer1.webp" alt="Sorcerer 1 Statue" class="product-image">
        <div class="product-info">
            <h2>Sorcerer 1 Statue</h2>
            <div class="product-description">
                <p>A hooded sorcerer with tattered robes, holding a twisted staff with a glowing crystal at the top.</p>
            </div>
            <div class="product-footer">
                <span class="price">&pound;10.00</span>
                <input type="hidden" name="product_name" value="Sorcerer 1 Statue">
                <input type="hidden" name="product_price" value="10.00">
                <input type="hidden" name="description" value="A hooded sorcerer with tattered robes, holding a twisted staff with a glowing crystal at the top.">
                <input type="hidden" name="product_image" value="Images/ProductImages/Sorcerer1.webp">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </form>
    <!-- End of Products -->
</section>

<!-- Pulls the footer into the page -->
<?php include('includes/light-footer.inc.php'); ?>
<script src="Includes/scripts.inc.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
