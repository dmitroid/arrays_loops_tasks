<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 6:15 PM
 */

/*
 * Сосктавьте массив месяцев.
 * С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
 * Текущий месяц должен храниться в переменной $month.
 */

$arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

$month = date('F');

foreach ($arr as $value) {
    if ($value == $month) {
        echo "<strong>{$value}</strong><br/>";
    } else {
        echo $value . "<br/>";
    }
}