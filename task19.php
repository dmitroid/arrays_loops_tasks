<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 6:32 PM
 */

/*
 * Составьте массив дней недели.
 * С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
 * Текущий день должен храниться в переменной $day.
 */


$arr = array('Monday', 'Thuesday', 'Wednesday', 'Thusday', 'Friday', 'Saturday', 'Sunday');
$day = date('l');

foreach ($arr as $value) {
    if ($value == $day) {
        echo "<i>{$value}</i><br/>";
    } else {
        echo $value . "<br/>";
    }
}


