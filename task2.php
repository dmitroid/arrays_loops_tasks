<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 3:27 PM
 */

/*
 * Дан массив с элементами 1, 20, 15, 17, 24, 35.
 * С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
 */

$arr = array(1, 20, 15, 17, 24, 35);
$result = 0;

foreach ($arr as $item) {
    $result += $item;
}

echo $result;