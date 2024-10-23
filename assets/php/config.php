<?php
// config.php

$host = 'localhost'; // e.g., 'localhost'
$db = 'u793298586_glove'; // e.g., 'gloves_db'
$user = 'u793298586_glove'; // e.g., 'root'
$pass = 'Glove123#'; // e.g., ''

try {
    // Set the PDO error mode to exception
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
