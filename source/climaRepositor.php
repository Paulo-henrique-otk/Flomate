<?php
namespace Source;

class climaRepositor{
 private string $cidade = "Floriano,BR";
 private string $apiKey = "Sua Chave API";   
 private string $codigoEstado = "PI";
 private string $codigoPais = "BRA";
 private $params = [];
 private function setParam(){
$this->params["q"] = $this->cidade . "-" .$this->codigoEstado ."," . $this->codigoPais;
$this->params["units"] = "metric";
$this->params["lang"] = "pt_br";  
$this->params["appid"] = $this->apiKey;
 }
 public function getResponse(){
    $this->setParam();
  $curl = curl_init();
  curl_setopt_array($curl,[
    CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?".http_build_query($this->params),
    CURLOPT_RETURNTRANSFER=>true
  ]);
$resposta = curl_exec($curl);
curl_close($curl);
return json_decode($resposta,true);
 }
}