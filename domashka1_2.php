<?php
/**
 * Created by PhpStorm.
 * User: Lyubov
 * Date: 17.01.2016
 * Time: 17:00
 */
$minute = date('i');
echo 'Прошло минут с начала часа: '.$minute.'<br>';
echo 'Цвет: '.((($minute % 5 == 0 || ($minute - 4) % 5 == 0) || $minute == 4) ? 'Красный' : 'Зеленый');