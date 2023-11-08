<?php
require_once 'header.php';

$id=$_POST["id"];
$sql = "SELECT * FROM линии_производства where ID_Цеха=$id";
$result = $conn->query($sql);
$i=1;
if ($result->num_rows > 0) {
    echo "Таблица Линий:<br>";
    "Цех: " . $row["ID_Цеха"];
    while ($row = $result->fetch_assoc()) {
        echo "Линия № " .$i++. " Статус: " . $row["ID_Статуса"] . " <a href='stage.php'>Подробнее</a><br> " ;
    }
} else {
    echo "Нет данных в таблице Материалы.";
}


require_once('footer.php');
?>