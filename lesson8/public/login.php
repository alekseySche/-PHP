<?php
header("Content-type:text/html; charset=utf-8");

include __DIR__ . '/../config/main.php';
require_once ENGINE_DIR . 'autoload.php';

session_start();

$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($user = getUserByLoginPass($login, $password)) {
        $_SESSION = [];
        $_SESSION['users']['id'] = $user['id'];
        $_SESSION['users']['login'] = $login;
        redirect('index.php');
    }

    $message = 'Неправильная пара логин/пароль';
}

render('login', ['message' => $message] );