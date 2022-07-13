<?php
include_once('templates/header.php');
require_once('config/db.php');
require_once('data/connection.php');

$sql = "SELECT * FROM taco ORDER BY fecha_creacion DESC";
$conn = new DBConnection(DB_CONN_ARR);
$stmt = $conn->dbc->prepare($sql);
$stmt->execute();
$tacos = $stmt->fetchAll();
?>


    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Taqueria La taquita</h1>
            <p class="col-md-8 fs-4">Ven y disfruta de los mejores tacos de popayan en la Taquita RestoBar.</p>
            <a class="btn btn-dark btn-lg" href="create.php">Diseña tu taco</a>
        </div>
    </div>

    <div class="mx-1 my-4">
        <h3>Tus tacos</h3>
    </div>

    <div class="row align-items-md-stretch">
        <?php foreach ($tacos as $taco) { ?>
            <div class="col-md-4">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2><?= $taco['nombre'] ?></h2>
                    <p>
                        <?= $taco['ingredientes'] ?>
                    </p>
                    <a class="btn btn-danger btn-outline-secundary"
                       href="back/delete.php?id=<?= $taco['id'] ?>">Eliminar</a>
                    <a class="btn btn-dark btn-outline-secundary" href="view.php?id=<?= $taco['id'] ?>">Ver</a>
                </div>
            </div>
        <?php } ?>
    </div>

<?php
include_once('templates/footer.php');
?>