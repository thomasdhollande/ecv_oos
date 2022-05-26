<?php

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$root_url = $protocol . $_SERVER['HTTP_HOST'];

define('ROOT_URL', $root_url);

use Routing\Router;

spl_autoload_register(function ($fqcn) {
    $path = str_replace('\\', '/', $fqcn);
    require_once(__DIR__ . '/' . $path . '.php');
});


$router = Router::getFromGlobals();
$controller = $router->getController();

ob_start();
$controller->render();
$content = ob_get_clean();

echo $content;
