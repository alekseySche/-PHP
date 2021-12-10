<?php

require_once ENGINE_DIR . 'bd.php';
function getUserByLoginPass($login, $password) {
    return queryOne("SELECT * FROM users WHERE login = '{$login}' AND password = '{$password}'");
}