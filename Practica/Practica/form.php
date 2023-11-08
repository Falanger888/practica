<?php
require_once 'header.php';
?>

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

<?php
require_once('footer.php');
?>