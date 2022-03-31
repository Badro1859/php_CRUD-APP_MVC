<?php
session_start();
if(!isset($_SESSION['name']))
    header("Location: login.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Rental Cars</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>

  <div class="wrapper">
    <nav>
    <input type="checkbox" id="show-menu">
    <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
    <div class="content">
        <div class="logo"><a href="#">Rental Cars</a></div>
        <ul class="links">
        <li><a href="home.php">Home</a></li>
        <li><a href="client.php">Client</a></li>
        <li><a href="user.php">Users</a></li>
        <li><a href="car.php">Cars</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        </ul>
    </div>
    </nav>
  </div>