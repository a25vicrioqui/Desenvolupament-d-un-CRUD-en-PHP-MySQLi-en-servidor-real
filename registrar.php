<?php
$mysqli = include_once "conexion.php";

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];
$sentencia = $mysqli->prepare("INSERT INTO videojuegos (nombre, descripcion, categoria) VALUES (?, ?, ?)");

$sentencia->bind_param("sss", $nombre, $descripcion, $categoria);

$sentencia->execute();
header("Location: listar.php");