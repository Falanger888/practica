<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method='POST'>


    <label for="">Плитки</label>
    <input type="text" placeholder="Сколько надо плитки" name="count"></input>
    
    <select name="size">
        <option value="460">200*200*7</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
    </select>
    <button> Склепать</button>
    </form>
    
</body>
</html>