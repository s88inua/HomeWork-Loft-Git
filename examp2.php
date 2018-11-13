<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 12/11/18
 * Time: 15:21
 */

const SCHOOL_EXPO = 80;
const EXPO_MARKS = 23;
const EXPO_PENCILS = 18;

echo 'Школьная выставка = ' . SCHOOL_EXPO . '</br>';
echo 'Маркеры = ' . EXPO_MARKS . '</br>';
echo 'Карандаши = ' . EXPO_PENCILS . '</br>';
echo 'Краски = ?' . '</br>';
$paint = SCHOOL_EXPO - EXPO_MARKS - EXPO_PENCILS . '</br>';
echo 'Найдено = ' . $paint . ' красок' . '</br>';
