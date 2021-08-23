<?php
namespace App\Controllers;

use League\Plates\Engine;

class ScreensRoutes{
private $view;
public function __construct()
{
$this->view = Engine::create( __DIR__ . "/../views","php");
}
public function home(){
 echo $this->view->render("home");
}
}