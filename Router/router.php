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
        $uri = $this->getURI();

        $controllerName = 'AntsController';
        $actionName = 'action'.ucfirst($uri);
        include_once ('controllers/'.$controllerName.'.php');
        $controllerObject = new $controllerName;
        $result = $controllerObject->$actionName();
        }
}