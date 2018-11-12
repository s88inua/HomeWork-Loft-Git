<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 12/11/18
 * Time: 15:21
 */
$day = 88;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Рабочий день";
        break;
    case 6:
    case 7:
        echo "Выходной день";
        break;
    default:
        echo "Неизвестный день";
}