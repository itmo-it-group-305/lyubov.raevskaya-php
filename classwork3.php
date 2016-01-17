<?php
/**
 * Created by PhpStorm.
 * User: Lyubov
 * Date: 15.01.2016
 * Time: 20:39
 */

include 'actions.php'; //- выдает ошибку, но код выполняет: выводит число 885
#include_once 'actions.php2';
#require 'actions.php2'; //- выдает фатальную ошибку и ничего не выполняет
#require_once 'actions.php2';

//echo '8885';


function runAction($name = null, ...$args)
{
    $name = $name ?: 'index'; //= $name = $name ? $name: 'index';
    $action = $name . 'Action';

    if (!function_exists($action)) {
        //404
        header ('HTTP/1.1 404 Not Found');
        exit('404 Not Found');
    }
    $action(...$args);
}

//ini_set('display_errors', 1);

$action = isset($_GET['action']) ?  $_GET['action'] : null;

runAction($action);
//runAction('show', 1);
//runAction('about');
//runAction('test', 'Hi', 'users', ['user1', 'user2']);
