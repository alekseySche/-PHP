<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery_single_page</title>
    <style>
    body {
        margin: 50px auto;
        width: 800px;
    }

    img {
        width: 200px;
        height: 200px;
        object-fit: cover;
    }
    </style>
</head>

<body>
    <?php
    
    $images = array_splice(scandir('./img'), 2);
    foreach ($images as $image){
        if(is_file('./img/'.$image))
    ?>
    <a href="/img/<?php echo $image; ?>" target="_blank">
        <img src="/img/<?php echo $image; ?>" alt="#"></a>
    <?php
    }
 ?>

    <form action="form.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>" />
        <p>Загрузить новое изображение:</p>
        <p>Ширина изображения не должна превышать 1280 точек.</p>
        <p>Высота изображения не должна превышать 768 точек.</p>
        <p>Размер изображения не должен превышать 5 Мбайт.</p>
        <input type="file" name="image">
        <button type="submit">Загрузить</button>
    </form>

</body>

</html>