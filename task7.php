<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 3:53 PM
 */

/*
 * Дан массив с элементами 2, 5, 9, 15, 0, 4.
 * С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива,
 *  которые больше 3­х, но меньше 10.
 */

$arr = array(2, 5, 9, 15, 0, 4);

foreach ($arr as $value) {
    if ($value > 3 && $value < 10) {
        echo $value . "<br/>";
    }
}