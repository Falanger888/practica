<?php
session_start();
require_once "connect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if($_SESSION["user"]){
    echo  "<a href='logout.php'>Выйти</a><br>";
}
else{
    ?>
    <form action="signup.php" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Auth</button>
        <?php
        if ($_SESSION['message']) {
            echo $_SESSION['message'];
        }
        unset($_SESSION['message']);
        ?>
    </form>
    <?php
}
?>
    
</body>