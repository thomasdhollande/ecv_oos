<?php

namespace Routing;

use Controller\Controller;
use Controller\Error404;
use Controller\Home;

class Router
{
    private array $routes = [
        '/' => Home::class,
        '/404' => Error404::class
    ];

    private static string $path;
    private static ?Router $router = null;

    private function __construct()
    {
        self::$path = $_SERVER['PATH_INFO'] ?? '/';
    }

    public static function getFromGlobals(): Router {
        if (self::$router === null) {
            self::$router = new self();
        }

        return self::$router;
    }

    public function getController(): Controller {
        $controllerClass = $this->routes[self::$path] ?? $this->routes['/404'];
        $controller = new $controllerClass();

        if (!$controller instanceof Controller) {
            throw new \LogicException("controller $controllerClass should implement " . Controller::class);
        }

        return $controller;
    }
}
