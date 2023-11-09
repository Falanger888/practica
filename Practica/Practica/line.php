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
        $id = $row["ID"];
        echo "Линия № " .$i++. " Статус: " . $row["ID_Статуса"] . "<form action='stage.php'  method='POST'><input name='id' value='$id'  hidden></input> <button type='submith'>Отправить</button></form> <br> ";
    }
} else {
    echo "Нет данных в таблице Материалы.";
}


require_once('footer.php');
?>