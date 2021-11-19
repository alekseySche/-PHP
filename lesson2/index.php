/*Объявить две целочисленные переменные a и b и
задать им произвольные начальные значения.
Затем написать скрипт, который работает по следующему принципу:
если a и b положительные, вывести их разность;
если а и b отрицательные, вывести их произведение;
если а и b разных знаков, вывести их сумму;
ноль можно считать положительным числом.*/

'use strict';
let a = parseInt(prompt('Введите целое число a: '));
let b = parseInt(prompt('Введите целое число b: '));

function calc(a ,b){
    //если a и b положительные, вывести их разность;
    if (a >= 0 && b >= 0){
        return a - b;
    }
    //если а и b отрицательные, вывести их произведение;
    else if (a < 0 && b < 0){
        return a * b;
    }
    //если а и b разных знаков, вывести их сумму;
    else if ((a >= 0 && b < 0) || (a < 0 && b >= 0)){
        return a + b;
    }
}
console.log(calc(a, b));



/*Присвоить переменной $а значение в промежутке [0..15].
С помощью оператора switch организовать вывод чисел от $a до 15.*/

'use strict';

let a = Number(prompt("Введите число в диапозоне от 0 до 15"));
switch (a) {
    case 0:
        console.log(0);
    case 1:
        console.log(1);
    case 2:
        console.log(2);
    case 3:
        console.log(3);
    case 4:
        console.log(4);
    case 5:
        console.log(5);
    case 6:
        console.log(6);
    case 7:
        console.log(7);
    case 8:
        console.log(8);
    case 9:
        console.log(9);
    case 10:
        console.log(10);
    case 11:
        console.log(11);
    case 12:
        console.log(12);
    case 13:
        console.log(13);
    case 14:
        console.log(14);
    case 15:
        console.log(15);
        break;
    default:
        console.log("Вы ввели не число, либо число не в диапозоне от 0 до 15");

}

/*Реализовать основные 4 арифметические операции
в виде функций с двумя параметрами.
Обязательно использовать оператор return.
 */

'use strict';
let a = Number(prompt("Введите первое число "));
let b = Number(prompt("Введите второе число "));

function addition(a,b){
    return (a+b);
}

function subtraction(a,b){
    return (a-b);
}

function multiplication(a,b){
    return (a*b);
}

function division(a,b){
    return (a/b);
}

console.log("Сумма двух чисел ", addition(a,b));
console.log("Разность двух чисел ", subtraction(a,b));
console.log("Произведение двух чисел ", multiplication(a,b));
console.log("Деление двух чисел ", division(a,b));


/*Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) 
и вернуть полученное значение (использовать switch).*/


'use strict';

let a = Number(prompt("Введите первое число "));
let b = Number(prompt("Введите второе число "));

function addition(a,b){
    return (a+b);
}

function subtraction(a,b){
    return (a-b);
}

function multiplication(a,b){
    return (a*b);
}

function division(a,b){
    return (a/b);
}

function mathOperation(arg1, arg2, operation) {

switch (operation) {
    case "+":
        return addition (arg1, arg2);
    case "-":
        return subtraction (arg1, arg2);
    case "*":
        return multiplication (arg1, arg2);
    case "/":
        return division (arg1, arg2);
    default:
        alert("Неизвестная операция " + oper);
        return "?";
}
}

let oper = prompt("Введите математическую операцию ( + - * / ):")

console.log(`${a} ${oper} ${b} = ` , mathOperation(a, b, oper));

