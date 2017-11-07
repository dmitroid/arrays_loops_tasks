<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 8:06 PM
 */

/*
 * Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами.
 */

$arr = array(rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100));
$before = $arr;

$max = $arr[0];
$max_index = 0;
$min = $arr[0];
$min_index = 0;

foreach ($arr as $key => $value) {
    if ($value > $max) {
        $max = $value;
        $max_index = $key;
    }
    if ($value < $min) {
        $min = $value;
        $min_index = $key;
    }
}

$arr[$min_index] = $max;
$arr[$max_index] = $min;

print_r($before);
echo "<br/>";
print_r($arr);
