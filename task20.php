<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 6:42 PM
 */

/*
 * Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
 */

for ($i = 1; $i <= 20; $i++) {
    echo str_repeat('x',$i) . "<br/>";
}