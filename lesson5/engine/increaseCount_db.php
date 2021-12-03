<?php
function increaseCount($id, $count) {
    $count += 1;
    query("UPDATE big_small_img.images SET count = '{$count}' WHERE id = '{$id}'");

}