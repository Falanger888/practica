<?php
require_once 'header.php';
?>

<form action="update_storage.php" method='POST'>
    Добавление материалов
    <input type="text" name="pesok" placeholder="Введите Глину"></input>
    <input type="text" name="glina" placeholder="Введите Песок"></input>
    <input type="text" name="primes" placeholder="Введите Примесь"></input>
    <button> Добавить глину</button>
</form>

<?php
require_once('footer.php');
?>