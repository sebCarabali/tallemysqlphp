<?php
require_once('../config/db.php');
require_once('../data/connection.php');

$sql = "INSERT INTO taco (nombre, ingredientes) VALUES (?, ?)";
$conn = new DBConnection(DB_CONN_ARR);
$stmt = $conn->dbc->prepare($sql);
$stmt->bindParam(1, $_POST['nombre']);
$stmt->bindParam(2, $_POST['ingredientes']);
$stmt->execute();

header("Location: http://127.0.0.1");
exit();
?>