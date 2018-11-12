<?php
<?php
/**
Работа сделаа из двух вариантов ручной режим вывода и через цикл foreach - как вариант хотел попробывать что получиться
 */

$BMW['model'] = 'X5';
$BMW['speed'] = '120';
$BMW['doors'] = '5';
$BMW['year'] = '2015';


$Cars = [
    'BMW' => ['name' => 'BMW' , 'model' => 'X5' , 'speed' => 120 , 'doors' => 5 , 'year' => 2015] ,
    'Toyota' => ['name' => 'Toyota' , 'model' => 'Corola' , 'speed' => 100 , 'doors' => 2 , 'year' => 2001] ,
    'Opel' => ['name' => 'Opel' , 'model' => 'Tilda' , 'speed' => 110 , 'doors' => 3 , 'year' => 2007]
];


echo 'Car ' . $Cars['BMW']['name'] . '</br>';
echo $Cars['BMW']['model'] . ' ' . $Cars['BMW']['speed'] . ' ' . $Cars['BMW']['doors'] . ' ' . $Cars['BMW']['year'] . '</br>';

echo 'Car ' . $Cars['Toyota']['name'] . '</br>';
echo $Cars['Toyota']['model'] . ' ' . $Cars['Toyota']['speed'] . ' ' . $Cars['Toyota']['doors'] . ' ' . $Cars['Toyota']['year'] . '</br>';

echo 'Opel ' . $Cars['Toyota']['name'] . '</br>';
echo $Cars['Opel']['model'] . ' ' . $Cars['Opel']['speed'] . ' ' . $Cars['Opel']['doors'] . ' ' . $Cars['Opel']['year'] . '</br>';

/**
Вариант №2 через wbrk Foreach
 */

foreach ($Cars as $brand => $massiv)
{
    echo '</br>';
    echo 'Car ' . $brand . '</br>';
    foreach ($massiv as $inner_key => $value)
    {
        echo $value . ' ';
    }
}