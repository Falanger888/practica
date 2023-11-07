<?php
session_start();
require_once 'connect.php';


$status=$_POST['status'];
$id=$_SESSION["user"]["id_line"];

myqsli_query($conn, "UPDATE `этапы_производства` SET `ID_Статуса` = 1 WHERE `этапы_производства`.`ID` = 1");
header("Location: stage.php");

