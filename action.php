<?php
require_once("db.php");

$action = $_POST['action'];

switch($action){
    case "add":
        $sql = "INSERT INTO `forest_tree` (`id`, `forest_id`, `tree_id`) VALUES (NULL, :forest, :tree);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':forest', $forest);
        $stmt->bindParam(':tree', $tree);

        $forest = $_POST['forest'];
        $tree = $_POST['tree'];
        $stmt->execute();
        break;
            
    case "addTree":
        $sql = "INSERT INTO `tree` (`id`, `tree_name`) VALUES (NULL, :tree);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':tree', $tree);

        $tree = $_POST['tree'];
        $stmt->execute();
        break;
        
    case "del":
        $sql = "DELETE FROM `forest_tree` WHERE `forest_tree`.`id` =:id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        $id = $_POST['id'];
        $stmt->execute();
        break;
        
    case "select":
        $sql = "SELECT `forest_name`,`tree_name` 
                FROM `forest` 
                JOIN `forest_tree` ON (forest_tree.forest_id = forest.id) 
                JOIN `tree` ON (forest_tree.tree_id = tree.id) 
                WHERE forest.id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $id = $_POST['id'];
        $stmt->execute();
        
        echo "<table class='result'><tr><th>Дерево:</th><th>Действие:</th></tr>";

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
             echo "<tr><td>".$row['tree_name']."</td><td><a href='' class='del' data-num=".$row['id'].">удалить</a></td></tr>";
        }

        echo "</table>";
        echo "<a href='/' class='inner__back'>Назад</a>";
        break;
        
    
    default:
        $stmt = $pdo->query("SELECT forest_tree.id,`forest_name`,`tree_name` 
                        FROM `forest`
                        JOIN `forest_tree` ON (forest.id = forest_tree.forest_id) 
                        JOIN `tree` ON (tree.id = forest_tree.tree_id)");
        
        echo "<table class='result'><tr><th>Лес:</th><th>Дерево:</th><th>Действие:</th></tr>";

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
             echo "<tr><td>".$row['forest_name']."</td><td>".$row['tree_name']."</td><td><a href='' class='del' data-num=".$row['id'].">удалить</a></td></tr>";
        }

        echo "</table>";

    }










