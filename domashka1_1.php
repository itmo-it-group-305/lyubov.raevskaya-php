<?php
/**
 * Created by PhpStorm.
 * User: Lyubov
 * Date: 17.01.2016
 * Time: 16:08
 */
$year = 2003;
var_dump ((($year % 4 == 0 && $year % 100 !== 0) || $year % 400 == 0) ? 'visikosny' : 'nevisokosny');