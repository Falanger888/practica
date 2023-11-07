<?php
session_start();
// Подключение к базе данных
require_once 'connect.php';

$sql = "SELECT * FROM этапы_производства";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Таблица Этапов: Внведите сколько <a href='form.php'>надо</a><br>";
    while ($row = $result->fetch_assoc()) {
        echo "Наименование этапа: " . $row["Наименование_этапа"] . ", Брак: " . $row["Брак"] . ", Первый Сорт: " . $row["1_Сорт"] . ", Второй Сорт: " . $row["2_Сорт"].  ", Статус: " . $row["ID_Статуса"]. "<br>" ;
    }
} else {
    echo "Нет данных в таблице Материалы.";
}
$id_line=$_SESSION['user']['id_line'];

$sql = "SELECT * FROM линии_производства where ID='$id_line'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo " <br>Таблица Материалов: <br>";
    while ($row = $result->fetch_assoc()) {
        echo "Песок: " . $row["Песок"] . "кг, Глина: " . $row["Глина"] . "кг, Примесь: " . $row["Примесь"] . "кг<br>" ;
    }
} else {
    echo "Нет данных в таблице Материалы.";
};
if ($_SESSION["user"]){
    echo '<a href="form_status.php">Изменить статус</a>';
};

?>