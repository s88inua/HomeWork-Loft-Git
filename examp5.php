<?php
/**
Работа сделана из двух вариантов ручной режим вывода и через цикл foreach - как
 * вариант хотел попробывать, что получиться...
 */

$cars = [
    'BMW' => ['name' => 'BMW' , 'model' => 'X5' , 'speed' => 120 , 'doors' => 5 , 'year' => 2015] ,
    'Toyota' => ['name' => 'Toyota' , 'model' => 'Corola' , 'speed' => 100 , 'doors' => 2 , 'year' => 2001] ,
    'Opel' => ['name' => 'Opel' , 'model' => 'Tilda' , 'speed' => 110 , 'doors' => 3 , 'year' => 2007]
];


echo 'Car ' . $cars['BMW']['name'] . '</br>';
echo $cars['BMW']['model'] . ' ' . $cars['BMW']['speed'] . ' ' . $cars['BMW']['doors'] . ' ' . $cars['BMW']['year'] . '</br>';

echo 'Car ' . $cars['Toyota']['name'] . '</br>';
echo $cars['Toyota']['model'] . ' ' . $cars['Toyota']['speed'] . ' ' . $cars['Toyota']['doors'] . ' ' . $cars['Toyota']['year'] . '</br>';

echo 'Opel ' . $cars['toyota']['name'] . '</br>';
echo $cars['Opel']['model'] . ' ' . $cars['Opel']['speed'] . ' ' . $cars['Opel']['doors'] . ' ' . $cars['Opel']['year'] . '</br>';

/**
Вариант №2 через цикл Foreach
 */

foreach ($cars as $brand => $all_cars) {
    echo '</br>';
    echo 'Car' . $brand . '</br>';
    foreach ($all_cars as $inner_key => $value) {
        echo $value . ' ';
    }
}
