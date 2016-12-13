<?php
require_once("db.php");
$action = $_POST["action"];

switch($action){
        
    case "ins":
        $sql = "INSERT INTO `forest` (`id`, `forest_name`) VALUES (NULL, :forest);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':forest', $forest);

        $forest = $_POST['forest'];
        $stmt->execute();
        break;
        
    case "upd":
        $sql = "UPDATE `forest` SET `forest_name` = :name WHERE `id` = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        
        $name = $_POST['name'];
        $id = $_POST['id'];
        $stmt->execute();
        break;    
        
        
    case "del":
        $sql = "DELETE FROM `forest` WHERE `id` =:id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        $id = $_POST['id'];
        $stmt->execute();
        break;
    
    default:
        $stmt = $pdo->query("SELECT `forest_name`,`id` FROM `forest`");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($row);    
    
}



?>