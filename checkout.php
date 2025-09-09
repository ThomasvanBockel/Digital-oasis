<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Afrekenen</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .checkout-container { max-width: 500px; margin: 40px auto; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); padding: 32px; }
        .checkout-container h2 { margin-top: 0; }
    </style>
</head>
<body>
    <div class="checkout-container">
        <h2>Afrekenen</h2>
        <p>Bedankt voor je bestelling! (Demo pagina)</p>
        <a href="index.php">Terug naar webshop</a>
        <script>
        // Haal cart en quantities uit PHP sessie
        <?php
        session_start();
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
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
        $quantities = isset($_SESSION['quantities']) ? $_SESSION['quantities'] : [];
        $licenties = [];
        foreach ($cart as $id) {
            if (isset($products[$id])) {
                $licenties[] = [
                    'name' => $products[$id]['name'],
                    'price' => $products[$id]['price'],
                    'qty' => isset($quantities[$id]) ? $quantities[$id] : 1
                ];
            }
        }
        ?>
        // Zet licenties in localStorage
        var licenties = <?php echo json_encode($licenties); ?>;
        var bestaande = JSON.parse(localStorage.getItem('licenties') || '[]');
        Array.prototype.push.apply(bestaande, licenties);
        localStorage.setItem('licenties', JSON.stringify(bestaande));
        </script>
    </div>
</body>
</html>
