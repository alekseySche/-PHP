<?php

function addToCart($id, $quantity = 1) {
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$id]['quantity'] = $quantity;
    }
}

function deleteFromCart($id, $quantity = 1) {
    if ($_SESSION['cart'][$id]['quantity'] == 1) {
        unset($_SESSION['cart'][$id]);
    } else {
        $_SESSION['cart'][$id]['quantity'] -= $quantity;
    }
}

function getCartProd($arr = []) {
    $arrProd = [];
    $totalProdCost = 0;
    if (isset($arr)) {
        foreach ($arr as $key => $value) {
            $prod_id = $key;
            $prod = getOneProductById($prod_id);
            $prod_quantity = $value['quantity'];
            $totalPrice = (int)$prod['price']  * $prod_quantity;
            $totalProdCost += $totalPrice;
            $arrProd[] = ['id' => $prod_id, 'url' => $prod['url'], 'title' => $prod['title'], 'price' => $prod['price'],
                'quantity' => $prod_quantity, 'cost' => $totalPrice];
        }
        $arrProd[] = ['total' => $totalProdCost];
    }
    return $arrProd;
}