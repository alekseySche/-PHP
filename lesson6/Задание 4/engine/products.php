<?php

require_once ENGINE_DIR . 'bd.php';

function getAllProducts() {
    return queryAll('SELECT * FROM catalogue');
};

function getOneProductById($id) {
    return queryOne("SELECT * FROM catalogue WHERE id = {$id}");
}