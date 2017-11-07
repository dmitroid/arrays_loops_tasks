<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 6:48 PM
 */

/*
 * Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.
 */

for ($i = 1; $i <= 9; $i++) {
    echo str_repeat($i, $i) . "<br/>";
}