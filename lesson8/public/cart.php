<?php
header("Content-type:text/html; charset=utf-8");

include __DIR__ . '/../config/main.php';
include CONFIG_DIR . 'db.php';
require_once ENGINE_DIR . 'autoload.php';

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