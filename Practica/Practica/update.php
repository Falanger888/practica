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

header("Location: stage.php");

