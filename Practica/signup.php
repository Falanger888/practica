<?php
session_start();

require_once "connect.php";

$login = $_POST['login'];
$password = $_POST['password'];

$checkUser = mysqli_query($conn, "SELECT * FROM `user` WHERE `login`='$login' and `password`='$password'");

if(mysqli_num_rows($checkUser)>0){
    $user = mysqli_fetch_assoc($checkUser);

    $_SESSION['user'] = [

        "login" => $user['login'],
        "rol" => $user['rol'],
        "id_line" => $user['id_line'],
    ];

    $_SESSION['message'] = 'Welcome';
    header('Location: stage.php');

}else{
    $_SESSION['message'] = 'Log/Pass Err';
    header('Location: index.php');
}

?>