<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 5:18 PM
 */

/*
 * Дан массив $arr.
 * С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива.
 * Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.
 */

$arr = array(4, 2, 5, 19, 13, 0, 10);
$count = 0;

foreach ($arr as $value) {
    $count++;
}

echo $count;