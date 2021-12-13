<?php

function getOrder() {
    return queryAll("SELECT id, date, total_cost, status FROM orders WHERE id_user = '{$_SESSION['users']['id']}'");
}

function addOrder() {
    if ($_SESSION['cart']){
        $order_products = getCartProd($_SESSION['cart']);
        $total_cost = ($order_products[count($order_products) - 1]['total']);
        $datetime = time();
        query("INSERT INTO orders (id_user, date, total_cost) 
        VALUES ('{$_SESSION['users']['id']}', '{$datetime}', '{$total_cost}')");
        $lastInsertId = queryOne("SELECT MAX(`id`) AS id FROM `orders`");

foreach ($order_products as $product => $value) {
    if ($product < count($order_products) - 1) {
        query("INSERT INTO order_items (id_order, id_prod, item_price, quantity, login) 
    VALUES ('{$lastInsertId['id']}', '{$value['id']}', '{$value['price']}', '{$value['quantity']}', '{$_SESSION['users']['login']}')");
    }
}
        $_SESSION['cart'] = [];
        redirect($_SERVER['REQUEST_URI']);
        exit;
    }
}

function changeStatus($id_order) {
    query("UPDATE orders SET status = 'Отменен' WHERE id = '{$id_order}'");
}