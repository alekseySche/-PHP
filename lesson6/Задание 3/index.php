<?php
header("Content-type:text/html; charset=utf-8");

include __DIR__ . '/config/main.php';
include CONFIG_DIR . 'db.php';
include ENGINE_DIR . 'db.php';
include ENGINE_DIR . 'comments.php';

if ($_REQUEST['submit']) {
    $name = shieldingStr($_REQUEST['name']);
    $comment = shieldingStr($_REQUEST['comment']);
    addComment($name, $comment);
    header("Location: index.php");
    exit;
}

$comments = getComments();

include TEMPLATE_DIR . 'comments.php';
