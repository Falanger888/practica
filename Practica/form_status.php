<?php
session_start();
require_once 'connect.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="update_status.php" method='POST'>

<select name="status">
    <option value="1">Активен</option>
    <option value="2">Не Активен</option>
    <option value="3">Ремонт</option>
</select>
<button> Обновить статус</button>
</form>
</body>
</html>