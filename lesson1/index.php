
<?php

    $a = 5;
    $b = '05';

    var_dump ( $a == $b ); // Почему true?
    // Т.к. переменные сравниваются по значению, $b приводится к целому числу 5, а 5 = 5.

    var_dump (( int ) '012345' ); // Почему 12345?
    // Строка '012345' также приводится к целому числу, поэтому первый ноль отбрасывается.

    var_dump (( float ) 123.0 === ( int ) 123.0 ); // Почему false?
    // Здесь сравнение идет по типу и значению. Типы изначально у нас разные.

    var_dump (( int ) 0 === ( int ) 'hello, world'); // Почему true?
    // 'hello, world' при приведении к целому числу даёт 0. Типы одинаковые. Результат true.



    <?php
    $title = "Lesson 1";
    $h1 = "Hello, world!";
    $date_today = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
</head>
<body>
    <h1><?=$h1?></h1>
    <p><?="It's $date_today year."?></p>
</body>
</html>



<?php
    echo '<p>Before: <br>';
    echo 'a = ' . ($a = 10) . '<br>';
    echo 'b = ' . ($b = 250) . '</p>';

    echo '<p>After: <br>';
    $a += $b;
    $b = $a - $b;
    $a -= $b;
    echo "a = $a<br>";
    echo "b = $b</p>";