<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 4:42 PM
 */

/*
 * Вывести таблицу умножения
 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($arr as $num1) {
    echo "Умножение числа {$num1}:<br/>";
    foreach ($arr as $num2) {
        $res = $num1 * $num2;
        echo "{$num1} x {$num2} = {$res}<br/>";
    }
}