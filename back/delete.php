<?php

echo "Eliminando" . $_REQUEST['id'];
require_once('../config/db.php');
require_once('../data/connection.php');

$sql = "DELETE FROM taco WHERE id = ?";
$conn = new DBConnection(DB_CONN_ARR);
$stmt = $conn->dbc->prepare($sql);
$stmt->bindParam(1, $_REQUEST['id']);
$stmt->execute();

header("Location: http://127.0.0.1");
exit();
?>