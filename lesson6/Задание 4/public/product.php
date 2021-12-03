<?php

include __DIR__ . '/../config/main.php';
include CONFIG_DIR . 'bd.php';
include ENGINE_DIR . 'bd.php';
include ENGINE_DIR . 'render.php';
include ENGINE_DIR . 'products.php';

$id = $_GET['id'];
$product = getOneProductById($id);
render('single_page', ['product' => $product]);