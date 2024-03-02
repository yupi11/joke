<?php
$a1 = readline("Введите начало первого отрезка a1: ");
$b1 = readline("Введите конец первого отрезка b1: ");
$a2 = readline("Введите начало второго отрезка a2: ");
$b2 = readline("Введите конец второго отрезка b2: ");

$intersectionStart = max($a1, $a2);
$intersectionEnd = min($b1, $b2);

if ($intersectionStart <= $intersectionEnd) {
    echo "Отрезки пересекаются на интервале [$intersectionStart; $intersectionEnd]";
} else {
    echo "Отрезки не пересекаются";
}
?>