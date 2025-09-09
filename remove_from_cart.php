<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array_values(array_diff($_SESSION['cart'], [$id]));
    }
    header('Location: cart.php');
    exit;
}
?>
