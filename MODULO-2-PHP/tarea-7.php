<?php 
$ip ="";

$server = gethostbyname($ip) . "<BR>"; //Esto da la ip del cliente. 
$ip = $_SERVER['REMOTE_ADDR'] . "<BR>"; //Esto da la ip del Servidor.


echo "Esto da la ip del cliente: " . $server;
echo "Esto da la ip del Servidor:" . $ip;


echo "Este es el fichero que se esta ejecutando: " . __FILE__;
?>