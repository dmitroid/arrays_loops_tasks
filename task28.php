<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/7/17
 * Time: 11:21 AM
 */

/*
 * Вывести таблицу умножения с помощью двух циклов for.
 */

for ($i = 1; $i <= 9; $i++) {
    echo "Умножение {$i} <br/>";
    for ($j = 1; $j <= 9; $j++) {
        echo "{$i} x {$j} = " . $i * $j . "<br/>";
    }
}