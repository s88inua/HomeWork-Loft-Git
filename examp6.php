<?php
/**
 * Решение таблицы умножение найдено на просторах интернета - по дополнительным
 * задачам уже были собственные домыслы и доработки
 */

$rows = 10;
$cols = 10;
echo '<table>';
for ($tr = 1; $tr <= $rows; $tr++) {
    echo '<tr>';
    for ($td = 1; $td <= $cols; $td++) {
        if (($tr % 2 == 0 and $td % 2 !== 0) or ($tr % 2 !== 0 and $td % 2 == 0)) {
            echo '<td>' . $tr * $td . '</td>';
        } elseif ($tr % 2 == 0) {
            echo '<td>' . '(' . $tr * $td . ')' . '</td>';
        } elseif ($tr % 2 !== 0) {
            echo '<td>' . '[' . $tr * $td . ']' . '</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';
