<?php //20 вариант
session_start();

if (!isset($_SESSION['shop'])) {
    header('Location: 44.php');
    exit;
}

$team = $_SESSION['shop'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>сессия</title>
    </head>
    <body>
        <p>Название магазина: <?= $team['name'] ?></p>
        <p>Категория товаров: <?= $team['category'] ?></p>
        <p>Время работы: <?= $team['timework'] ?></p>

        <a href="44.php">На главную</a>
    </body>
</html>