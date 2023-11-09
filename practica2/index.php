<?php require_once('header.php') ?>

<div class="wrapper">
    <div class="stage-box">
        <?php

        // Данные этапов
        $first_stage = array("name" => "Пресс", "class" => "green", "img" => "placeholder.jpg");
        $second_stage = array("name" => "Сушка БРС", "class" => "green", "img" => "placeholder.jpg");
        $third_stage = array("name" => "Печь", "class" => "green", "img" => "placeholder.jpg");
        $fourth_stage = array("name" => "Глазировка", "class" => "green", "img" => "placeholder.jpg");
        $fifth_stage = array("name" => "Печать", "class" => "green", "img" => "placeholder.jpg");
        $sixth_stage = array("name" => "Печь", "class" => "green", "img" => "placeholder.jpg");
        $seventh_stage = array("name" => "Сортировка", "class" => "green", "img" => "placeholder.jpg");

        // Создаем массив
        $status = array($first_stage, $second_stage, $third_stage, $fourth_stage, $fifth_stage, $sixth_stage, $seventh_stage);
        $randomCub = array_rand($status); // Выбираем случайный индекс

        // Перекрашиваем блоки до случайного красного блока в оранжевый
        for ($i = 0; $i < $randomCub; $i++) {
            $status[$i]['class'] = 'orange';
        }

        // Случайный выбранный блок делаем красным
        $status[$randomCub]['class'] = 'red';

        // Перекрашиваем блоки после случайного красного блока в зеленый
        for ($i = $randomCub + 1; $i < count($status); $i++) {
            $status[$i]['class'] = 'green';
        }

        // Отрисовка блоков
        foreach ($status as $i => $status) {
            $class = 'status_' . $status['class'];
            $i++;

        ?>
            <div class="stage <?= $class ?>">
                <h4><?= $status['name'] ?></h4>
                <div class="img-box">
                    <img src="img/<?= $status['img'] ?>" alt="#">
                </div>
                <div class="material">
                    <div class="material-start">
                        <ul>
                            <li>bruh</li>
                        </ul>
                    </div>
                    <div class="material-exit"></div>
                </div>
                <div class="arrow">→</div>
            </div>
        <?php
        }

        ?>
    </div>
</div>

<?php require_once('footer.php') ?>