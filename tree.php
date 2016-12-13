<?php
require_once("db.php");

$stmt = $pdo->query("SELECT `tree_name`,`id` FROM `tree`");
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($row);

?>