<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 7:21 PM
 */

/*
 * Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
 * Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
 */


$chars = preg_split('//', $_GET['number'], -1, PREG_SPLIT_NO_EMPTY);
$sum = 0;

foreach ($chars as $value) {
    $sum += $value;
}

echo "Сума цифр введенного числа {$_GET['number']} равна: " . $sum;
