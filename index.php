<?php
require __DIR__ . "/vendor/autoload.php";
use CoffeeCode\Router\Router;
ob_start();
$router = new Router(URL);
$router->namespace("App\Controllers");
$router->group(null);
$router->get("/","ScreensRoutes:home");
ob_end_flush();
$router->dispatch();