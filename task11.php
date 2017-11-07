<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 4:08 PM
 */

/*
 * Выведите столбец четных чисел в промежутке от нуля до 100
 */

// Пример с for

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br/>";
    }
}

// Пример с while

//$i = 1;
//
//while ($i <= 100) {
//    if ($i % 2 == 0) {
//        echo $i . "<br/>";
//    }
//    $i++;
//}