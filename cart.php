<?php
session_start();
// Zelfde product array als eerder
$products = [
    ["name" => "Ficus", "price" => "€10"],
    ["name" => "Monstera", "price" => "€15"],
    ["name" => "Spathiphyllum", "price" => "€20"],
    ["name" => "Sansevieria", "price" => "€25"],
    ["name" => "Zamioculcas", "price" => "€30"],
    ["name" => "Aloe Vera", "price" => "€12"],
    ["name" => "Anturium", "price" => "€18"],
    ["name" => "Ficus Lyrata", "price" => "€22"],
    ["name" => "ZZ Plant", "price" => "€28"],
    ["name" => "Rubber Plant", "price" => "€35"],
    ["name" => "Pothos", "price" => "€40"],
    ["name" => "spinnen Plant", "price" => "€45"],
    ["name" => "Vredes lelie", "price" => "€50"],
    ["name" => "Yucca", "price" => "€55"],
    ["name" => "Cannabis plant", "price" => "€60"],
    ["name" => "Tabak plant", "price" => "€65"],
    ["name" => "aubergine plant", "price" => "€70"],
    ["name" => "artisjok plant", "price" => "€75"],
    ["name" => "monstera deliciosa", "price" => "€80"],
    ["name" => "aalbes plant", "price" => "€85"],
];
$quantities = isset($_SESSION['quantities']) ? $_SESSION['quantities'] : [];
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Winkelwagen</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .cart-container { max-width: 600px; margin: 40px auto; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); padding: 32px; }
        .cart-item { display: flex; justify-content: space-between; align-items: center; padding: 12px 0; border-bottom: 1px solid #eee; }
        .cart-item:last-child { border-bottom: none; }
        .cart-empty { text-align: center; color: #888; }
    </style>
</head>
<body>
    <div class="cart-container">
        <h2>Winkelwagen</h2>
        <?php if (count($cart) === 0): ?>
            <p class="cart-empty">Je winkelwagen is leeg.</p>
        <?php else: ?>
            <form method="post" action="update_cart.php">
            <?php $total = 0; ?>
            <?php foreach ($cart as $id): ?>
                <?php if (isset($products[$id])): ?>
                    <?php $qty = isset($quantities[$id]) ? $quantities[$id] : 1; ?>
                    <div class="cart-item">
                        <span><?php echo htmlspecialchars($products[$id]["name"]); ?></span>
                        <span><?php echo $products[$id]["price"]; ?></span>
                        <input type="number" name="qty[<?php echo $id; ?>]" value="<?php echo $qty; ?>" min="1" style="width:50px; margin-left:12px;">
                        <form method="post" action="remove_from_cart.php" style="display:inline; margin-left:16px;">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <button type="submit" style="background:#c00;color:#fff;border:none;padding:6px 12px;border-radius:4px;cursor:pointer;">Verwijderen</button>
                        </form>
                        <?php $total += intval(preg_replace('/[^0-9]/', '', $products[$id]["price"])) * $qty; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <div style="margin-top:24px; font-size:1.2em;"><strong>Totaalprijs:</strong> €<?php echo $total; ?></div>
            <div style="margin-top:24px; display:flex; gap:16px;">
                <button type="submit" style="background:#666;color:#fff;border:none;padding:10px 20px;border-radius:4px;cursor:pointer;">Hoeveelheid bijwerken</button>
                <a href="index.php" style="background:#888;color:#fff;padding:10px 20px;border-radius:4px;text-decoration:none;">Verder winkelen</a>
                <a href="checkout.php" style="background:#0a0;color:#fff;padding:10px 20px;border-radius:4px;text-decoration:none;">Afrekenen</a>
            </div>
            </form>
        <?php endif; ?>
        <p><a href="index.php">← Verder winkelen</a></p>
    </div>
</body>
</html>
