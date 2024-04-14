<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/pop-it-master2/pop-it-master2/public/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav>
        <!--<a class="montserrat" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>-->
        <?php
        if (!app()->auth::check()):
            ?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
<!--            <a href="--><?php //= app()->route->getUrl('/signup') ?><!--">Регистрация</a>-->
        <?php else: ?>
            <?php
                if (!app()->auth::checkRole()):
            ?>
                    <a href="<?= app()->route->getUrl('/logout') ?>">Выход </a>
                    <a href="<?= app()->route->getUrl('/addEmp') ?>">Добавить </a>
                    <a href="<?= app()->route->getUrl('/subdivision') ?>"> Список и подразделение </a>
                    <a href="<?= app()->route->getUrl('/addSub') ?>"> Подразделение </a>
                    <a href="<?= app()->route->getUrl('/sort') ?>"> Поиск по критериям </a>
                    <a href="<?= app()->route->getUrl('/employee') ?>">Список сотрудников </a>


                <?php else: ?>
                <a href="<?= app()->route->getUrl('/logout') ?>">Выход </a>
                <a href="<?= app()->route->getUrl('/addEmp') ?>">Добавить </a>
            <?php
                endif;
            ?>
        <?php
            endif
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>

