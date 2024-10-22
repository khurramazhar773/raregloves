<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id =  $_POST['id'];


    $sql = "DELETE FROM `quot` WHERE `quot`.`id` = $id";
    $dell = $conn->query($sql);
    
 
        if ($dell) {
            echo "Record deleted successfully.";
            header("Location: ../../admin/quots-penal.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing query: " . $conn->error;
}

$conn->close();
?>
