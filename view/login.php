<?php
// verification si deja login
session_start();
if(isset($_SESSION['name'])) {
    header("Location:../index.php");
}

////// not connected or wrong input

$wrong = false; // display wrong message

if (isset($_POST['username']) && isset($_POST['password'])) {
    require('../model/db_manager.php');

    // get user and pass
    $user = filter_input(INPUT_POST, 'username',FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);

    // verification dans la bd
    $query = 'SELECT * FROM users 
            WHERE name = :username and pass = :pass ';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $user);
    $statement->bindValue(':pass', $pass);
    $statement->execute();

    if(count($statement->fetchAll()) == 1) {
        $statement->closeCursor();

        // insert a session varibales
        $_SESSION['timeout'] = time();
        $_SESSION['name'] = $user;

        header("Location:../index.php");
    }
    else {
        $wrong = true; // display wrong message
        $statement->closeCursor();
    } 
} 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location de voiture</title>
    <link rel="stylesheet" href="./css/login.css">

</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <?php 
            if ($wrong){
                echo "<div id='wrong' class='wrong'>username or password is incorrect</div>";
                $wrong = false;
            }
            ?>
            <div class="pass">Forgot Password?</div>
                <input type="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="#">Signup</a>
            </div>
        </form>
    </div>
</body>
</html>