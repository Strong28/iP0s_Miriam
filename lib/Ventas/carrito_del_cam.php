<?php
if(!isset($_GET["indice"])) return;
$indice = $_GET["indice"];

session_start();
array_splice($_SESSION["cam"], $indice, 1);
header("Location: ./../../VDev.php?status=3");
?>