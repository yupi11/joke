<?php
$a1 = readline("Введите начало первого отрезка a1: ");
$b1 = readline("Введите конец первого отрезка b1: ");
$a2 = readline("Введите начало второго отрезка a2: ");
$b2 = readline("Введите конец второго отрезка b2: ");

$intersection_start = max($a1, $a2);
$intersection_end = min($b1, $b2);

if ($intersection_start <= $intersection_end) {
    echo "Отрезки пересекаются на интервале [$intersection_start; $intersection_end]";
} else {
    echo "Отрезки не пересекаются";
}
?>