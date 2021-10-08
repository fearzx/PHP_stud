<?php
$mysqli = new connect("localhost", "root", "password", "ant_store");
#тоже тут пропущу обработку ошибок
$res = $mysqli->query("SELECT * from users WHERE id = 1");
$row = $res->fetch_assoc();
echo $row['msg'];
