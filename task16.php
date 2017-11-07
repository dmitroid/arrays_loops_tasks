<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 6:03 PM
 */

/*
 * Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
 * С помощью цикла foreach и оператора if выведите на экран столбец элементов массива,
 * как показано на картинке. 1, 2, 3 4, 5, 6 7, 8, 9
 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$i = 1;

foreach ($arr as $value) {
    if ($i % 3 == 0) {
        echo $value . "<br/>";
    } else {
        echo $value . ", ";
    }
    $i++;
}