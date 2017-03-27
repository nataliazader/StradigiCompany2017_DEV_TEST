<?php

require '../vendor/autoload.php';

Twig_Autoloader::register();


error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Panel', 'action' => 'index']);
//$router->add('', ['controller' => 'Gallery', 'action' => 'index']);

$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
    
$router->dispatch($_SERVER['QUERY_STRING']);

