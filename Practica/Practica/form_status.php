<?php
require_once 'header.php';
?>

<form action="update_status.php" method='POST'>
    <input name="id" value="" hidden>
    Выберите статус
    <select name="status">
        <option value="1">Активен</option>
        <option value="2">Не Активен</option>
        <option value="3">Ремонт</option>
    </select>
    Выберите этап
    <select name="stage">
        <option value="1">Сушка БРС</option>
        <option value="2">Пресс</option>
        <option value="3">Сушка Плитки</option>
        <option value="4">Глазировочная</option>
        <option value="5">Печь</option>
        <option value="6">Фрезер</option>
        <option value="7">Сортировка</option>
    </select>
    <button> Обновить статус</button>
</form>

<?php
require_once('footer.php');
?>