<?php
session_start();

unset($_SESSION['name']);
unset($_SESSION['timeout']);
session_destroy();

header("Location:login.php");
?>