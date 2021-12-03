<?php

function getComments() {
    return query('SELECT * FROM comments');
}

function addComment($name, $comment) {
    execute("INSERT INTO comments (name, text) VALUES ('{$name}', '{$comment}')");
}