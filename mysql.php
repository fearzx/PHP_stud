<?php
require_once 'connect.php';
$mysqli = new dbConnect();
#тоже тут пропущу обработку ошибок
$res = $mysqli->query("SELECT * from users WHERE id = 1");
$row = $res->fetch_assoc();
echo $row['msg'];