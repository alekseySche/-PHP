<?php
header("Content-type:text/html; charset=utf-8");

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

$id = $_GET['id'];
$product = getOneProductById($id);
render('single_page', ['product' => $product, 'login' => $_SESSION['users']['login']]);