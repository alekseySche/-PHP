<?php

function getConnection() {
    $config = include CONFIG_DIR . 'db.php';
    static $isConnection = NULL;
    if (is_null($isConnection)) {
    $conn = mysqli_connect($config['host'], $config['user'], $config['password'], $config['dbName']);
    return $conn;
    }
}

function execute($sql) {
    return mysqli_query(getConnection(), $sql);
}

function query($sql) {
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function closeConnection() {
    return mysqli_close(getConnection());
}

function shieldingStr($str) {
    return mysqli_real_escape_string(getConnection(), $str);
}