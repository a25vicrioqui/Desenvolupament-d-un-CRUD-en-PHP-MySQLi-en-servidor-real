<!DOCTYPE html>
<html>
<head>
    <title>Videojuegos</title>
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        header {
            background: blue;
            color: white;
            padding: 10px;
            text-align: center;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        img.logo {
            max-width: 200px;
            display: block;
            margin: 10px auto;
        }

        button {
            padding: 10px 20px;
            margin: 5px 0;
        }
    </style>
</head>
<body>

<header>
    <h2>Videojuegos</h2>
    <img class="logo" src="https://www.institutpedralbes.cat/wp-content/uploads/2021/05/logo.jpg" alt="Logo">
</header>

<main>
    <h1>Videojuegos</h1>

    <p>En esta página puedes gestionar videojuegos usando métodos CRUD:
    Create (Registrar), Read (Listar), Update (Actualizar) y Delete (Eliminar).</p>

    <form action="listar.php" method="post">
        <button type="submit">Listar videojuegos</button>
    </form>

    <form action="formulario_registrar.php" method="post">
        <button type="submit">Registrar videojuego</button>
    </form>


<?php include_once "pie.php" ?>

