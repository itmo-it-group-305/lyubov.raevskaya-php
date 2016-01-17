<?php
/**
 * Created by PhpStorm.
 * User: Lyubov
 * Date: 17.01.2016
 * Time: 17:21
 */

$Xa = 2;
$Ya = 7;
$Xb = 12;
$Yb = 5;
$Xc = 6;
$Yc = 1;

$a = ($Xa - $Xc)*($Xa - $Xc) + ($Ya - $Yc)*($Ya - $Yc);
$b = ($Xb - $Xa)*($Xb - $Xa) + ($Yb - $Ya)*($Yb - $Ya);
$c = ($Xc - $Xb)*($Xc - $Xb) + ($Yc - $Yb)*($Yc - $Yb);

//echo $a.'<br>'.$b.'<br>'.$c.'<br>';

if (($a == $b+$c) || ($b == $c+$a) || ($c == $a+$b)) var_dump('Треугольник прямоугольный');
else var_dump('Теугольник не является прямоугольным');

