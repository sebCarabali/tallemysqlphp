<?php
include_once('templates/header.php');
?>

<!-- Contenido -->

<aside>
    <h2>Crea tu super taco.</h2>
</aside>

<form action="back/create.php" method="post">
    <div class="form-group">
        <label for="nombre" class="mb-2">Nombre</label>
        <input type="text" require name="nombre" id="nombre" placeholder="Nombra tu taco" class="form-control">
    </div>

    <div class="form-group mt-2">
        <label for="ingredientes">Ingredientes</label>
        <textarea require name="ingredientes" rows="10" id="ingredientes" placeholder="Dinos los ingredientes para crear tu super taco separados por coma" class="form-control mt-1"></textarea>
    </div>

    <div class="row mt-2">
        <div class="col">
            <a class="btn btn-danger" href="index.php">Volver</a>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </div>
</form>
<!-- End contenido -->

<?php
include_once('templates/footer.php');
?>