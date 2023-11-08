<?php
    require_once 'header.php';
?>

<h1>Главная страница</h1>

<?php

    $sql = "SELECT * FROM цеха";
    $result = $conn->query($sql);

    /* Вывод список цехов */

    if ($result->num_rows > 0) {
        echo "<br>Цехи:<br>";
        while ($row = $result->fetch_assoc()) {
            $id = $row["ID"];
            echo "Название: " . $row["Наименование"] . " Статус: " . $row["ID_Статуса"] . "<form action='line.php'  method='POST'><input name='id' value='$id'  hidden></input> <button type='submith' href='line.php'>Отправить</button></form> <br> ";
        }
    } else {
        echo "Нет данных в таблице Материалы.";
    }

    /* Вывод таблицы готовой продукции */

    $sql = "SELECT * FROM Склад_готового";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<br>Таблица готовых продуктов:<br>";
        while ($row = $result->fetch_assoc()) {
            echo "Название: " . $row["title"] . " Сорт 1: " . $row["1_Сорт"] . " Сорт 2: " . $row["2_Сорт"] . "<br> ";
        }
    } else {
        echo "Нет данных в таблице Материалы.";
    }

    /* Вывод таблицы материалов */

    $sql = "SELECT * FROM материалы";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<br>Таблица материалов:<br>";
        while ($row = $result->fetch_assoc()) {
            echo "Название: " . $row["Наименование"] . ", Количество: " . $row["Количество_кг"] . "<br> ";
        }
    } else {
        echo "Нет данных в таблице Материалы.";
    };

    if($_SESSION["user"]["rol"]== "admin"){
        echo "<a href='form_storage.php'>Добавить новые материалы</a>";
    }
?>



<?php
    require_once('footer.php');
?>