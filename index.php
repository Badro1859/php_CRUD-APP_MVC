<?php  
    session_start();
    if(!isset($_SESSION['name'])) {
        echo "<script> location.href='./view/login.php';</script>";
        exit;
    }



    

    echo "<div><a href='view/logout.php'>Logout</a></div>";

?>