<!DOCTYPE html>
<html>
<head>
    <title>ANTS56</title>
    <meta charset="utf-8" />
</head>
<body>
<h3>Муравьишки</h3>
<form action="add" method="post">
    <p>Имя:
        <input type="text" name="username" /></p>
    <p>email:
        <input type="email" name="email" /></p>
    <input type="submit" value="Добавить">
</form>
<form action="show" method="post">
    <input type="submit" value="Показать Муравьишек">
</form>
<form action="index" method="post">
        <input type="submit" value="Home">
</form>
</body>
</html>

//Подключаем роутер
<?php
require_once 'Router/router.php';

$router = new Router();
$router->run();