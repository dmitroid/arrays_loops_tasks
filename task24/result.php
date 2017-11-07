<?php
/**
 * Created by PhpStorm.
 * User: dmitroid
 * Date: 11/6/17
 * Time: 7:50 PM
 */


echo "Количество вхождений цифры {$_GET['check_number']} в число {$_GET['number']} равно: " . substr_count($_GET['number'], $_GET['check_number']);

