<?php
session_start();
require_once 'connect.php';

$glina = $_POST['glina'];
$pesok = $_POST['pesok'];
$primes = $_POST['primes'];

$mass=[$glina, $pesok, $primes];
$chet=0;

// Assuming you have the necessary form data and connection details

$sql = "SELECT * FROM материалы";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Таблица материалов:<br>";

    while ($row = $result->fetch_assoc()) {
        $existingQuantity = $row["Количество_кг"];
       
        // Calculate the new quantity by adding the existing value with the form values
        $updatedQuantity = $existingQuantity + $mass[$chet];
        $chet++;
        // Update the database with the new quantity
        $updateSql = "UPDATE материалы SET Количество_кг = $updatedQuantity WHERE ID = " . $row['ID'];
        $conn->query($updateSql);

        // Display the updated information
        echo "Название: " . $row["Наименование"] . ", Новое количество: " . $updatedQuantity . "<br>";
    }
} else {
    echo "Нет данных в таблице Материалы.";
}
?>