<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список сотрудников</title>
    <link rel="stylesheet" href="/pop-it-master2/pop-it-master2/public/css/subdivision.css">
</head>
<body>
<div class="container">
    <div class="employee-list">
        <h2>Список сотрудников</h2>
        <table>
            <thead>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Подразделение</th>
                <th>Должность</th>
            </tr>
            </thead>
            <tbody>
            <!-- Здесь будут строки с данными о сотрудниках -->
            <tr>
                <td>Иванов</td>
                <td>Иван</td>
                <td>Иванович</td>
                <td>Отдел кадров</td>
                <td>HR-менеджер</td>
            </tr>
            <!-- Добавьте остальные строки с данными о сотрудниках -->
            </tbody>
        </table>
    </div>
    <div class="filter">
        <h2>Фильтр по подразделению</h2>
        <select>
            <option value="">Все подразделения</option>
            <option value="Отдел кадров">Отдел кадров</option>
            <option value="Отдел разработки">Отдел разработки</option>
            <!-- Добавьте остальные варианты подразделений -->
        </select>
    </div>
</div>
</body>
</html>
