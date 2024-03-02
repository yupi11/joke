<?php
$color1 = strtolower(readline("Введите первый основной цвет (красный, синий, желтый): "));
$color2 = strtolower(readline("Введите второй основной цвет (красный, синий, желтый): "));

if (($color1 == 'красный' && $color2 == 'синий') || ($color1 == 'синий' && $color2 == 'красный')) {
    $result = 'фиолетовый';
} elseif (($color1 == 'красный' && $color2 == 'желтый') || ($color1 == 'желтый' && $color2 == 'красный')) {
    $result = 'оранжевый';
} elseif (($color1 == 'синий' && $color2 == 'желтый') || ($color1 == 'желтый' && $color2 == 'синий')) {
    $result = 'зеленый';
} elseif ($color1 == $color2) {
    $result = $color1;
} else {
    echo "Ошибка: неверные названия цветов";
    exit;
}

echo "При смешивании цветов $color1 и $color2 получится $result";
?>
