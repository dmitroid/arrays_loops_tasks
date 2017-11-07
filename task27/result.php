<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/7/17
 * Time: 11:01 AM
 */

/*
 * Создать генератор случайных таблиц.
 * Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
 * Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
 * в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
 * В каждой ячейке должно находиться случайное число.
 */

$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo "<table>";

for ($i = 1; $i <= $_GET['rows']; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $_GET['cols']; $j++) {
        echo "<td style='background-color:" . $colors[rand(0, 6)] ."; '>" . rand(1, 100000) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";