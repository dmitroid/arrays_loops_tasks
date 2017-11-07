<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 3:31 PM
 */

/*
 * Дан массив с элементами 26, 17, 136, 12, 79, 15.
 * С помощью цикла foreach найдите сумму квадратов элементов этого массива.
 * Результат запишите переменную $result.
 */

$arr = array(26, 17, 136, 12, 79, 15);

$result = 0;

foreach ($arr as $item) {
    $result += $item ** 2;
}

echo $result;