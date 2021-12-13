<?php
header("Content-type:text/html; charset:utf-8");

include __DIR__ . '/../config/main.php';
include CONFIG_DIR . 'db.php';
require_once ENGINE_DIR . 'autoload.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_order = $_POST['id_order'];
    changeStatus($id_order);
}

if ($_REQUEST['add_order']) {
    addOrder();
}

$arr_orders = getOrder();

render('orders', ['arr_order' => $arr_orders, 'login' => $_SESSION['users']['login']]);