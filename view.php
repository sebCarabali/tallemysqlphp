<?php
include_once('templates/header.php');
require_once('config/db.php');
require_once('data/connection.php');

$id = $_REQUEST['id'];
$sql = "SELECT * FROM taco WHERE id = ?";
$conn = new DBConnection(DB_CONN_ARR);
$stmt = $conn->dbc->prepare($sql);
$stmt->bindParam(1, $id);
$stmt->execute();
$taco = $stmt->fetch();
?>

<aside>
    <h2>Edita tu taco</h2>
</aside>

<form action="back/edit.php" method="post">
    <div class="form-group">
        <label for="nombre" class="mb-2">Nombre</label>
        <input type="text" require name="nombre" id="nombre" value="<?= $taco['nombre'] ?>" placeholder="Nombra tu taco"
               class="form-control">
    </div>

    <div class="form-group mt-2">
        <label for="ingredientes">Ingredientes</label>
        <textarea require name="ingredientes" rows="10" id="ingredientes"
                  placeholder="Dinos los ingredientes para crear tu super taco separados por coma"
                  class="form-control mt-1"><?= $taco['ingredientes'] ?></textarea>
    </div>

    <input type="hidden" value="<?= $taco['id'] ?>" name="id" id="id">

    <div class="row mt-2">
        <div class="col">
            <a class="btn btn-danger" href="index.php">Volver</a>
            <button class="btn btn-primary" type="submit">Editar</button>
        </div>
    </div>
</form>
<!-- End contenido -->

<?php
include_once('templates/footer.php');
?>
