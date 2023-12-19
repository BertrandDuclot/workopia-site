<?php
require '../helpers.php';

$routes = [
    '/' => 'controllers/home.php',
    '/listings' => 'controllers/listings/index.php',
    '/listings/create' => 'controllers/listings/create.php',
    '404' => 'controllers/error/404.php'
];

$uri = $_SERVER['REQUEST_URI'];

if(array_key_exists($uri, $routes)){
    require(basePath($routes[$uri]));
} else {
    //echo basePath($routes['$uri']);
    require basePath($routes['404']);
}
