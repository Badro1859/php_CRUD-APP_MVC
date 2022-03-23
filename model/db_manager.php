<?php 
    $serverName = "localhost";
    $port = "3308";
    $userName = "badro";
    $password = "badro1859";
    $dbName = "crud";
    
    $dsn = "mysql:host={$serverName};port={$port};dbname={$dbName}";
    
    try {
        $db = new PDO($dsn, $userName, $password);
        echo "success";

    } catch (PDOException $e) {
        $error_message = 'Database Error: ';
        $error_message .= $e->getMessage();
        //include('../view/error.php');
        echo $error_message;
        exit();
    }

?>