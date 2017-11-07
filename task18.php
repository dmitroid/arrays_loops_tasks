<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 6:25 PM
 */

/*
 * Составьте массив дней недели.
 * С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.
 */

$arr = array('Monday', 'Thuesday', 'Wednesday', 'Thusday', 'Friday', 'Saturday', 'Sunday');

foreach ($arr as $key => $value) {
    if ($key == 5 || $key == 6) {
        echo "<strong>{$value}</strong><br/>";
    } else {
        echo $value . "<br/>";
    }
}