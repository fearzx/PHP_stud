<?php
require_once 'controllers/connect.php';
require_once 'Router/router.php';
require_once 'ants/view.php';

$router = new Router();
$router->run();

'<html>
<form action="index.php" method="post">
    <input type="submit" value="Вернуться">
</form>
</html>';