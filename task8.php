<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 3:57 PM
 */

/*
 * Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
 * С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'.
 * Циклы while и for
 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$result = null;

foreach ($arr as $value) {
    $result .= $value;
}

echo $result;

