<?php

function connect($host, $login, $password, $base) {
    $conn = mysqli_connect($host, $login, $password, $base);
    if (mysqli_connect_errno()) {
        echo 'Не удалось соединиться с базой данных';
        exit;
    }
    return $conn;
}