<?php

function getConnection() {
    $config = include CONFIG_DIR . 'bd.php';
    static $isConnection = NULL;
    if (is_null($isConnection)) {
        $conn = mysqli_connect($config['host'], $config['login'], $config['password'], $config['dbName']);
        return $conn;
    }
}

function execute($sql) {
    return mysqli_query(getConnection(), $sql);
}

function queryAll($sql) {
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne($sql) {
    return queryAll($sql)[0];
}

function closeConnection() {
    return mysqli_close(getConnection());
}