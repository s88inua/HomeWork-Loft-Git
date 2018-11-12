<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 12/11/18
 * Time: 15:21
 */
$age = 101;
if ($age >= 18 AND $age <= 65) {
    echo 'Вам еще работать';
} elseif ($age >= 66 AND $age <= 100) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 1 AND $age <= 17) {
    echo 'Еще рано';
} else {
    echo 'Неизвестный возраст';
}