<?php
// Static product data (same as products.php)
$products = [
    ["name" => "Ficus", "price" => "€10", "desc" => "Een populaire kamerplant met glanzende bladeren."],
    ["name" => "Monstera", "price" => "€15", "desc" => "Bekend om zijn grote, gespleten bladeren."],
    ["name" => "Spathiphyllum", "price" => "€20", "desc" => "Ook wel vredeslelie genoemd, luchtzuiverend."],
    ["name" => "Sansevieria", "price" => "€25", "desc" => "Sterke plant, makkelijk te verzorgen."],
    ["name" => "Zamioculcas", "price" => "€30", "desc" => "ZZ plant, ideaal voor beginners."],
    ["name" => "Aloe Vera", "price" => "€12", "desc" => "Geneeskrachtige plant, sap wordt vaak gebruikt."],
    ["name" => "Anturium", "price" => "€18", "desc" => "Mooie bloemen, tropische uitstraling."],
    ["name" => "Ficus Lyrata", "price" => "€22", "desc" => "Ook wel vioolbladplant genoemd."],
    ["name" => "ZZ Plant", "price" => "€28", "desc" => "Sterke plant, weinig water nodig."],
    ["name" => "Rubber Plant", "price" => "€35", "desc" => "Grote bladeren, robuuste plant."],
    ["name" => "Pothos", "price" => "€40", "desc" => "Hangplant, makkelijk te stekken."],
    ["name" => "spinnen Plant", "price" => "€45", "desc" => "Luchtzuiverend, geschikt voor elke kamer."],
    ["name" => "Vredes lelie", "price" => "€50", "desc" => "Bloeit met witte bloemen."],
    ["name" => "Yucca", "price" => "€55", "desc" => "Sterke plant, kan tegen droogte."],
    ["name" => "Cannabis plant", "price" => "€60", "desc" => "Voor medicinale en recreatieve doeleinden."],
    ["name" => "Tabak plant", "price" => "€65", "desc" => "Wordt gebruikt voor tabaksproductie."],
    ["name" => "aubergine plant", "price" => "€70", "desc" => "Groeit paarse vruchten."],
    ["name" => "artisjok plant", "price" => "€75", "desc" => "Eetbare bloemknoppen."],
    ["name" => "monstera deliciosa", "price" => "€80", "desc" => "Grote tropische plant."],
    ["name" => "aalbes plant", "price" => "€85", "desc" => "Geeft rode bessen."],
];
$id = isset($_GET['id']) ? intval($_GET['id']) : -1;
if ($id < 0 || $id >= count($products)) {
    echo '<h2>Product niet gevonden</h2>';
    exit;
}
$product = $products[$id];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($product['name']); ?> - Productpagina</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .product-detail {
            max-width: 500px;
            margin: 40px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            padding: 32px;
        }

        .product-detail .product-image {
            height: 180px;
            background: #888;
            border-radius: 6px;
            margin-bottom: 24px;
            object-fit: contain;
        }

        img {
            margin-left: 10%;
            width: 400px;
            height: 100%;
        }

        .product-detail h2 {
            margin-top: 0;
        }

        .add-cart-btn {
            background: #666;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 24px;
        }
    </style>
</head>
<body>
<div class="product-detail">
    <div class="product-image"><img src="images/rubber_plant.webp"></div>
    <h2><?php echo htmlspecialchars($product['name']); ?></h2>
    <p><strong>Prijs:</strong> <?php echo $product['price']; ?></p>
    <p><?php echo htmlspecialchars($product['desc']); ?></p>
    <form method="post" action="add_to_cart.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="add-cart-btn">Toevoegen aan winkelwagen</button>
    </form>
    <p><a href="index.php">← Terug naar overzicht</a></p>
</div>
</body>
</html>
