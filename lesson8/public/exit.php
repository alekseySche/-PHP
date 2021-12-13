<?php

include __DIR__ . '/../config/main.php';
require_once ENGINE_DIR . 'autoload.php';

session_start();

$_SESSION = [];
redirect('index.php');