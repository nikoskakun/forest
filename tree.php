<?php
require_once("db.php");

$action = $_POST["action"];

switch($action){
        
    case "ins":
        $sql = "INSERT INTO `tree` (`id`, `tree_name`) VALUES (NULL, :tree);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':tree', $tree);

        $tree = $_POST['tree'];
        $stmt->execute();
        break;
        
    case "upd":
        $sql = "UPDATE `tree` SET `tree_name` = :name WHERE `id` = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        
        $name = $_POST['name'];
        $id = $_POST['id'];
        $stmt->execute();
        break;    
        
    case "del":
        $sql = "DELETE FROM `tree` WHERE `id` =:id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        $id = $_POST['id'];
        $stmt->execute();
        break;
    
    default:
    $stmt = $pdo->query("SELECT `tree_name`,`id` FROM `tree` ");
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($row);    
    
}





?>