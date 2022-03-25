<?php 
    $serverName = "localhost";
    $port = "3308";
    $userName = "root";
    $password = "root";
    $dbName = "crud";
    
    $dsn = "mysql:host={$serverName};port={$port};dbname={$dbName}";
    try {
        $db = new PDO($dsn, $userName, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<h2>ERROR SERVER : Please try later !!</h2>";
        echo "{$error_message}";
        exit();
    }
?>