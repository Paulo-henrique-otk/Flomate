<?php

define("URL","http://localhost:90/ClimaFlo");

function asset(string $path):string{
if($path){
return URL . "/app/assets/{$path}";
}
return URL . "/app/assets";
}