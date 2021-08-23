<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$router = new Router(URL);
$router->namespace("App\Controllers");
$router->group(null);
$router->get("/","ScreensRoutes:home");
$router->dispatch();