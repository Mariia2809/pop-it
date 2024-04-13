<link rel="stylesheet" href="/pop-it-master2/pop-it-master2/public/css/login.css">
<div class="log">
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post">

        <div class="login">
            <h2>Авторизация</h2>
            <input type="text" name="login" placeholder="Логин">

            <input type="password" name="password" placeholder="Пароль">
        <button>Войти</button>
        </div>
    </form>

</div>
<?php endif;
