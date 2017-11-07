<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 4:50 PM
 */

/*
 * Дан массив с элементами 4, 2, 5, 19, 13, 0, 10.
 * С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e,
 * равном 2, 3 или 4.
 * Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.
 */

$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = array(2, 3, 4);

$res = null;

foreach ($arr as $value) {
    if ($res == null) {
        foreach ($e as $is) {
            if ($value == $is) {
                $res = "Есть!";
            }
        }
    } else {
        break;
    }
}

if ($res) {
    echo $res;
} else {
    echo "Нет!";
}