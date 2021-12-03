<?php
function query($query) {
    if (!isset($GLOBALS['_db_connect'])) {
        $GLOBALS['_db_connect'] = connect(HOST, LOGIN, PASSWORD, TITLE);
    }
    if (!$res = mysqli_query($GLOBALS['_db_connect'], $query)) {
        echo "Ошибка запроса.";
        exit;
    }
    return $res;
}