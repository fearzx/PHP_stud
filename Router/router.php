<?php
class Router
{
    private $routes = array (
        'show' => 'ants/show', //actionShow в AntsController
        'add' => 'ants/add', //actionAdd в AntsController
    );

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                $segments = explode('/', $path);
                $controllerName = ucfirst(array_shift($segments) . 'Controller');
                $actionName = 'action'.ucfirst(array_shift($segments));
                include_once ('controllers/'.$controllerName.'.php');
                           }
            $controllerObject = new $controllerName;
            $result = $controllerObject->$actionName();
        }
    }
}