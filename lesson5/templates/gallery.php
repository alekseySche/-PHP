<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фотоальбом</title>
</head>
<body>

<?php
$arrImages = getImages();

asort($arrImages);

for ($i = 0; $i < count($arrImages); $i++) {
    ?> <a href="../public/image.php?id=<?=$arrImages[$i]['id']?>"><img
            src="../public/img/min/<?=$arrImages[$i]['title']?>"
            alt="img"></a> <?
}
?>

<form action="" enctype="multipart/form-data" method="POST" style="margin: 20px">
    <input type="file" name="file" style="outline: none">
    <input type="submit">
</form>
</body>
</html>