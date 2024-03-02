<?php
$number1 = (int)readline("Введите первое целое число: ");
$number2 = (int)readline("Введите второе целое число: ");
$operation = readline("Введите математическую операцию (+, -, *, /): ");

switch ($operation) {
    case '+':
        $result = $number1 + $number2;
        break;
    case '-':
        $result = $number1 - $number2;
        break;
    case '*':
        $result = $number1 * $number2;
        break;
    case '/':
        if ($number2 != 0) {
            $result = $number1 / $number2;
        } else {
            echo "На ноль делить нельзя";
            exit;
        }
        break;
    default:
        echo "Неверная операция";
        exit;
}

echo "Результат: $result";
?>