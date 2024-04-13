<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор сотрудников</title>
    <link rel="stylesheet" href="/pop-it-master2/pop-it-master2/public/css/sort.css">
</head>
<body>
<div class="container">
    <div class="employee-list">
        <h2>Список сотрудников</h2>
        <table>
            <thead>
            <tr>
                <th>ФИО сотрудника</th>
                <th>Дата рождения</th>
                <th>Подразделение</th>
            </tr>
            </thead>
            <tbody>
            <!-- Здесь будут строки с данными о сотрудниках -->
            <tr>
                <td>Иванов Иван Иванович</td>
                <td>01.01.1980</td>
                <td>Отдел кадров</td>
            </tr>
            <!-- Добавьте остальные строки с данными о сотрудниках -->
            </tbody>
        </table>
    </div>
    <div class="filter-form">
        <h2>Фильтр</h2>
        <form action="sort_process.php" method="post">
            <div class="form-group">
                <label for="employee_name">ФИО сотрудника:</label>
                <input type="text" name="employee_name" id="employee_name" placeholder="Введите ФИО">
            </div>
            <div class="form-group">
                <label for="sort_by_department">Сортировка по подразделению:</label>
                <select>
                    <option value="">Все подразделения</option>
                    <option value="Отдел кадров">Отдел кадров</option>
                    <option value="Отдел разработки">Отдел разработки</option>
                    <!-- Добавьте остальные варианты подразделений -->
                </select>
            </div>
            <div class="form-group">
                <label for="sort_by_age">Сортировка по возрасту:</label>
                <select name="sort_by_age" id="sort_by_age">
                    <option value="">Не выбрано</option>
                    <option value="asc">По возрастанию</option>
                    <option value="desc">По убыванию</option>
                </select>
            </div>
            <button type="submit">Применить фильтр</button>
        </form>
    </div>
</div>
</body>
</html>
