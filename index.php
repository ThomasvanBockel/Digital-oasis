<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Webshop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="topbar">
    <button class="menu-btn">☰</button>
    <input type="text" class="search" placeholder="Search products...">
    <a href="index.php" class="nav-btn" style="text-decoration:none;">Home</a>
    <a href="oase.html" class="nav-btn" style="text-decoration:none;">Mijn Oase</a>
    <a href="over_ons.php" class="nav-btn" style="text-decoration:none;">Over ons</a>
    <a href="cart.php" class="cart-btn" style="text-decoration:none;"><span>🛒</span></a>
    <a href="profile.php" class="profile-btn" style="text-decoration:none;"><span>👤</span></a>
</div>
<div class="container">
    <aside class="sidebar">
        <button class="sidebar-btn">Bomen</button>
        <button class="sidebar-btn">Planten</button>
        <button class="sidebar-btn">Kruiden</button>
        <button class="sidebar-btn">Bloemen</button>
        <button class="sidebar-btn">Grassen</button>
        <button class="sidebar-btn">Onkruid</button>
        <button class="sidebar-btn">Struiken</button>
        <button class="sidebar-btn">Knollen</button>
    </aside>
    <main class="product-grid">
        <?php include 'products.php'; ?>
    </main>
</div>
<footer class="footer">
    <button class="footer-btn">Over ons</button>
    <button class="footer-btn">Voorwaarden</button>
    <button class="footer-btn">Help</button>
    <button class="footer-btn">Gezondheid</button>
</footer>
</body>
</html>
