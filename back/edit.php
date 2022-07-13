<?php
require_once('../config/db.php');
require_once('../data/connection.php');

$id = $_POST['id'];
$sql = "UPDATE taco SET nombre = ?, ingredientes = ? WHERE id = ?";
$conn = new DBConnection(DB_CONN_ARR);
$stmt = $conn->dbc->prepare($sql);
$stmt->bindParam(1, $_POST['nombre']);
$stmt->bindParam(2, $_POST['ingredientes']);
$stmt->bindParam(3, $id);
$stmt->execute();

header("Location: http://127.0.0.1");
exit();