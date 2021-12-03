<?php
function getImg($id) {
    $res = query("SELECT url, title, count FROM big_small_img.images WHERE id = '{$id}'");
    return mysqli_fetch_assoc($res);
}