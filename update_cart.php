<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['qty'])) {
    $quantities = [];
    foreach ($_POST['qty'] as $id => $qty) {
        $id = intval($id);
        $qty = max(1, intval($qty));
        $quantities[$id] = $qty;
    }
    $_SESSION['quantities'] = $quantities;
}
header('Location: cart.php');
exit;
?>
