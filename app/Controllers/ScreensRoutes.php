<?php
namespace App\Controllers;
use League\Plates\Engine;
use Source\climaRepositor;

class ScreensRoutes{
private $view;
public function __construct()
{
$this->view = Engine::create( __DIR__ . "/../views","php");
}
public function home(){
$clima = new climaRepositor();
$respostaClima = $clima->getResponse();
$temperaturaAtual = $respostaClima["main"]["temp"];
$climaAtual = $respostaClima["weather"][0]["description"];
 echo $this->view->render("home",["climaAtual"=>$climaAtual,
 "temperaturaAtual"=>$temperaturaAtual]);
}
}