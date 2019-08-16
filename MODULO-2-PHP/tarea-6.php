<?php
 
$dom = $_SERVER['HTTP_HOST']; //recuperamos el dominio
$rest = $_SERVER['REQUEST_URI']; //recuperamos el resto
$url_completa = "http://" . $dom . $rest; //armamos la url
 
echo $url_completa;
 
?>