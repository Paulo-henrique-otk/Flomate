<?php
require __DIR__ . "/vendor/autoload.php";
use CoffeeCode\Router\Router;
$router = new Router(URL);
$router->namespace("App\Controllers");
$router->group(null);
$router->get("/","ScreensRoutes:home");
$router->dispatch();