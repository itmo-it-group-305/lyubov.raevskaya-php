<?php
/**
 * Created by PhpStorm.
 * User: l.raevskaya
 * Date: 15.01.2016
 * Time: 11:49
 */

$mas = array(1,2,3,8,14,89,45);
for($i=count($mas)-1; $i>=0; $i--) {$newMas[] = $mas[$i];}
echo '['.implode(',', $newMas).']';


// Исходный массив
//$mass = array(1,2,3,4,5,6,654,654,987);


// Итерация массива и формирование нового массива значениями в обратном порядке
//for($i=count($mass)-1; $i>=0; $i--) $newMass[]= $mass[$i];

// Вывод посредством foreach
//foreach($newMass as $key=>$val) echo $val.',';


// Объеденить и отобразить массив элементы массива через запятую
//echo '['.implode(',', $newMass).']';