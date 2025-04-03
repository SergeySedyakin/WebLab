<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['shop'] = [
        'name' => htmlspecialchars($_POST['name']),
        'category' => htmlspecialchars($_POST['category']),
        'timework' => (int)$_POST['timework']
    ];
    header('Location: 4.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Вариант 20</title>
    </head>
    <body>
        <form method="post">
            <p>
            Название магазина:<br>
            <input type="text" name="name" required>
            </p>
            <p>
            Категория товаров:
            <br>
            <select name="category" required>
                <option>продуктовый</option>
                <option>хозяйственный</option>
                <option>импортный</option>
            </select>
            </p>
            <p>
            Время работы:<br>
            <input type="text" name="timework" required>
            </p>
            <button type="submit">Отправить</button>
        </form>
    </body>
</html>