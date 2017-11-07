<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 3:36 PM
 */

/*
 * Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей,
 * с помощью второго — столбец элементов.
 * $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 */

$arr = array('green' => 'зеленый', 'red' => 'красный','blue' =>' голубой');

echo "Ключи: <br/>";
foreach ($arr as $key => $value) {
    echo $key . "<br />";
}
echo "Элементы: <br/>";
foreach ($arr as $key => $value) {
    echo $key . "<br />";
}

