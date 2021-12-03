<?php
function getImages() {
    $res = query('SELECT * FROM big_small_img.images ORDER BY count DESC');
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}