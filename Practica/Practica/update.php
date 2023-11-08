<?php
session_start();
require_once 'connect.php';

$count=$_POST['count'];
$id = $_SESSION['id'];
$size = $_POST['size'];
$summa=($count*$size)/1000;
$glina=round(($summa /3),3);
$pesok=round(($summa /3),3);
$primes=round(($summa /3),3);

$id=$_SESSION["user"]["id_line"];
mysqli_query($conn, "UPDATE `линии_производства` SET `Песок` = '$pesok', `Глина` = '$glina', `Примесь` = '$primes' WHERE `линии_производства`.`ID` = '$id'");
header("Location: stage.php");

