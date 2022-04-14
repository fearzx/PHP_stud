<?php

class Router
{
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri            = $this->getURI(); //данные из адресной строки
        $controllerName = 'AntsController';
        $actionName     = 'action' . ucfirst($uri); //добавляем action к адресу
        include_once('controllers/' . $controllerName . '.php');
        $controllerObject = new $controllerName;
        $result           = $controllerObject->$actionName();
    }
}