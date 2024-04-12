<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить подразделение</title>
    <link rel="stylesheet" href="/pop-it/pop-it-mvc/public/css/addSub.css">
</head>
<body>
<div class="container">
    <div class="subdivision-list">
        <h2>Список подразделений</h2>
        <table>
            <thead>
            <tr>
                <th>Название подразделения</th>
            </tr>
            </thead>
            <tbody>
            <!-- Здесь будут строки с данными о подразделениях -->
            <tr>
                <td>Отдел кадров</td>
            </tr>
            <!-- Добавьте остальные строки с данными о подразделениях -->
            </tbody>
        </table>
    </div>
    <div class="add-subdivision">
        <h2>Добавить подразделение</h2>
        <form action="addSubProcess.php" method="post">
            <input type="text" name="subdivision_name" placeholder="Название подразделения">
            <select name="subdivision_type">
                <option value="Отдел кадров">Отдел кадров</option>
                <option value="Отдел разработки">Отдел разработки</option>
                <!-- Добавьте другие варианты -->
            </select>
            <button type="submit">Добавить</button>
        </form>
    </div>
</div>
</body>
</html>
