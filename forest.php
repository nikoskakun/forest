<?php
require_once("db.php");

$stmt = $pdo->query("SELECT `forest_name`,`id` FROM `forest`");
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($row);

?>