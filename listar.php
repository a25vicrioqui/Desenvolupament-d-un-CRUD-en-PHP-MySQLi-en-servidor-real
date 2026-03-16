<?php
include_once "encabezado.php";

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, nombre, descripcion FROM videojuegos");
$videojuegos = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<div class="container my-4">
    <div class="row mb-3">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h1>Listado de videojuegos</h1>
            <a class="btn btn-success" href="formulario_registrar.php">Agregar nuevo</a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($videojuegos as $videojuego) { ?>
                            <tr>
                                <td><?php echo $videojuego["id"]; ?></td>
                                <td><?php echo $videojuego["nombre"]; ?></td>
                                <td><?php echo $videojuego["descripcion"]; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="editar.php?id=<?php echo $videojuego["id"]; ?>">Editar</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="eliminar.php?id=<?php echo $videojuego["id"]; ?>">Eliminar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once "pie.php"; ?>