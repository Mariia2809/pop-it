<link rel="stylesheet" href="/pop-it-master2/pop-it-master2/public/css/login.css">

<div class="log">
    <h3><?= $message ?? ''; ?></h3>
    <form method="post">

        <div class="login">
            <h2>Добавление сотрудника</h2>
            <input type="text" name="login" placeholder="Логин">

            <input type="password" name="password">
            <button>Добавить</button>
        </div>
    </form>

</div>

