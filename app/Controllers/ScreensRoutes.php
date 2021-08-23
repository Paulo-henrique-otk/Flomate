<?php
namespace App\Controllers;

use League\Plates\Engine;

class ScreensRoutes{
    private $view;
public function __construct()
{
$this->view = Engine::create("../views","php");
}
public function home(){
$this->view->render("home");
}
}