<?php
session_start();

$id = $_REQUEST["id"];
$nombre = $_REQUEST["nombre"];
$precio = $_REQUEST["precio"];

$prodsession = ["id" => $id, "nombre" => $nombre, "precio" => $precio];

$_SESSION["$nombre"] = $prodsession;

header("location: index.php");
var_dump($_SESSION);
?>
