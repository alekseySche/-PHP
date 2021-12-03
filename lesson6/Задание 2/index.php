<?php

function calc($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
            break;
        case '-':
            return $num1 - $num2;
            break;
        case '*':
            return $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                echo 'Делить на ноль нельзя!';
            } else {
                return $num1 / $num2;

            }
    }
}

//Получаем первое число из формы.
$num1 = $_GET['num1'];
//Получаем второе число из формы.
$num2 = $_GET['num2'];
//Получаем оператор.
$operator = $_GET['operator'];

//Подключаем шаблон.
include __DIR__ . '\form.php';