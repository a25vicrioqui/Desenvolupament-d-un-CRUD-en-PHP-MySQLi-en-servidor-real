<?php
include_once "encabezado.php";
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, nombre, descripcion, categoria FROM videojuegos WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$videojuego = $resultado->fetch_assoc();
if (!$videojuego) {
    exit("No hay resultados para ese ID");
}

?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar videojuego</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $videojuego["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $videojuego["nombre"] ?>" placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" required><?php echo $videojuego["descripcion"] ?></textarea>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <select name="categoria" id="categoria" class="form-control" required>
                    <option value="" disabled>Selecciona una categoría</option>
                    <option value="Deporte" <?php if($videojuego["categoria"]=="Deporte") echo "selected"; ?>>Deporte</option>
                    <option value="Disparos" <?php if($videojuego["categoria"]=="Disparos") echo "selected"; ?>>Disparos</option>
                    <option value="Pelea" <?php if($videojuego["categoria"]=="Pelea") echo "selected"; ?>>Pelea</option>
                    <option value="Chill" <?php if($videojuego["categoria"]=="Chill") echo "selected"; ?>>Chill</option>
                    <option value="Supervivencia" <?php if($videojuego["categoria"]=="Supervivencia") echo "selected"; ?>>Supervivencia</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="listar.php">Volver</a>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>
