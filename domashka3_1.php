
<?php
/**
 * Created by PhpStorm.
 * User: l.raevskaya
 * Date: 18.01.2016
 * Time: 16:20
 */
$year = date('Y');

$visYear = date('L'); //какой год: 1 - високосный, 0 - невисокосный

 function newYear () {
     $day = date('z'); //какой день по счету от начала года
     if ($visYear = 1)
     echo 'До нового года осталось: '.(366 - $day).' дней';
     else echo 'До нового года осталось: '.(365 - $day).' дней';
 }
