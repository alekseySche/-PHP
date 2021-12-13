<?php
header("Content-type:text/html; charset=utf-8");
include __DIR__ . '/../config/main.php';
include CONFIG_DIR . 'db.php';
require_once ENGINE_DIR . 'autoload.php';

session_start();
if ($_REQUEST['submit']) {
    $id = $_POST['id'];
    addToCart($id);
}
$id = $_GET['id'];
$product = getOneProductById($id);
render('single_page', ['product' => $product, 'login' => $_SESSION['users']['login']]);
