<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $product['title'] ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="../public/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="cart">
                <a class="come_back" href="../public/index.php"><i class="fas fa-arrow-left"></i></a>
                <?php echo (!$user_id = $_SESSION['users']) ?
                    "<a class='enter' href='../public/login.php'>Войти</a>" :
                    "<div class='enter'>Привет, {$login}!</div>" ?>

                <a href="cart.php"><img src="../public/img/main/cart.png" alt="cart"></a>
            </div>
        </div>
    </header>
    <div class="container">
        <h1><?= $product['title'] ?></h1>
        <div class="single_item">
            <div class="single_item__left">
                <img src="../public/img/<?= $product['url'] ?>">
            </div>
            <div class="single_item__right">
                <div class="single_item__right__buy_price">
                    <span><?= $product['price'] ?> руб</span>
                    <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                        <input type="hidden" name="id" value="<?= $product['id'] ?>">
                        <input class="single_item__right__buy_price__buy_button" name="submit" type="submit" value="В корзину">
                    </form>
                </div>
                <div class="single_item__right__brand">
                    <span>Производитель:</span> <?= $product['brand'] ?>.
                </div>
                <div class="single_item__right__description">
                    <span>Описание:</span> <?= $product['description'] ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>