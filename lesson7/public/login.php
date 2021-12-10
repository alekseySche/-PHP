<?php
header("Content-type:text/html; charset=utf-8");

include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'render.php';
include ENGINE_DIR . 'users.php';
include ENGINE_DIR . 'redirect.php';

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