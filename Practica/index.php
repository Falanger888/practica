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
    <h1>Главная страница</h1>
    
    <?php

    // Подключение к базе данных

    $sql = "SELECT * FROM цеха";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<br>Цехи:<br>";
        while ($row = $result->fetch_assoc()) {
            $id=$row["ID"];
            echo "Название: " . $row["Наименование"] ." Статус: " . $row["ID_Статуса"] . "<form action='line.php'  method='POST'><input name='id' value='$id'  hidden></input> <button type='submith' href='line.php'>Отправить</button></form> <br> " ;
        }
    } else {
        echo "Нет данных в таблице Материалы.";
    }






$sql = "SELECT * FROM Склад_готового";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Таблица готовых продуктов:<br>";
    while ($row = $result->fetch_assoc()) {
        echo "Название: " . $row["title"] ." Сорт 1: " . $row["1_Сорт"] ." Сорт 2: " . $row["2_Сорт"] . "<br> " ;
    }
} else {
    echo "Нет данных в таблице Материалы.";
}


$sql = "SELECT * FROM материалы";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Таблица материалов:<br>";
    while ($row = $result->fetch_assoc()) {
        echo"Название: " . $row["Наименование"]. ", Количество: " . $row["Количество_кг"] . "<br> " ;
    }
} else {
    echo "Нет данных в таблице Материалы.";
}



    ?>


<form action="signup.php" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Auth</button>
        <?php
        if($_SESSION['message']){
            echo $_SESSION['message'];
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>