<?php
header("Content-type:text/html; charset=utf-8");

//Подключаем скрипты.
include __DIR__ . '/../config/main.php';
include CONFIG_DIR . 'bd.php';
include ENGINE_DIR . 'bd.php';
include ENGINE_DIR . 'render.php';
include ENGINE_DIR . 'products.php';
include ENGINE_DIR . 'cart.php';

session_start();
if ($_REQUEST['submit']) {
    $id = $_POST['id'];
    addToCart($id);
}

$products = getAllProducts();
render('catalogue', ['products' => $products, 'login' => $_SESSION['users']['login']]);