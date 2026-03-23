<?php
$mysqli = include_once "conexion.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];

$sentencia = $mysqli->prepare("UPDATE videojuegos SET
nombre = ?,
descripcion = ?,
categoria = ?
WHERE id = ?");
$sentencia->bind_param("sssi", $nombre, $descripcion, $categoria, $id);
$sentencia->execute();
header("Location: listar.php");
