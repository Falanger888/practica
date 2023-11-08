<?php
session_start();
require_once 'connect.php';


$status=$_POST['status'];
$id=$_SESSION["user"]["id_line"];
$stage=$_POST["stage"];
mysqli_query($conn, "UPDATE `этапы_производства` SET `ID_Статуса` = '$status' WHERE `этапы_производства`.`ID` = '$stage'");

header("Location: stage.php");

