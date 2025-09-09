<?php
// Example static product data
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
foreach ($products as $product) {
    $id = array_search($product, $products);
    echo '<a class="product-card" href="product.php?id=' . $id . '">';
    echo '<div class="product-image"></div>';
    echo '<div class="product-info">';
    echo '<strong>' . htmlspecialchars($product["name"]) . '</strong><br>';
    echo $product["price"];
    echo '</div>';
    echo '</a>';
}
?>
