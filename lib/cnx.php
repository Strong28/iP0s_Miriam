<?php
date_default_timezone_set('America/Merida');
/* $DB = "u665967788_Berel"; 
$user = "u665967788_Berel_Ticul";
$pass = "sC*12Bg2"; */
$DB = "iP0s"; 
$user = "root";
$pass = "devAR93";

$conexion = new mysqli("localhost", $user, $pass, $DB);
if (!$conexion) {
    echo 'Error';
} else{
    //echo 'Conectado';
} 
$conexion->set_charset("utf8");
?>