<?php
header("Content-type:text/html; charset=utf-8");

include __DIR__ . '/../config/main.php';
include CONFIG_DIR . 'bd.php';
include ENGINE_DIR . 'bd.php';
include ENGINE_DIR . 'render.php';
include ENGINE_DIR . 'products.php';
include ENGINE_DIR . 'cart.php';
include ENGINE_DIR . 'redirect.php';

session_start();
if(!$user_id = $_SESSION['users']) {
    redirect('login.php');
}

if ($_REQUEST['delete']) {
    $cart_id = $_POST['cart_id'];
    deleteFromCart($cart_id);
}

$arrProd = getCartProd($_SESSION['cart']);
render('cart', ['arrProd' => $arrProd, 'login' => $_SESSION['users']['login']]);