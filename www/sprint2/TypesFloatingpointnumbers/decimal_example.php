<?php
/**
 * https://www.php.net/manual/ru/ref.bc.php
 * Need to set bcscale()  (return value of scale php >=7.3)
 * https://www.php.net/manual/en/function.bcscale.php
 *
 * Nice library
 * https://php-decimal.io/#introduction
 *
 * See to
 * https://www.php.net/manual/ru/language.types.string.php#language.types.string.conversion
 */
$a = 0.1;
$b = 0.2;

//Обратить внимания на тип представления данных после операций и параметр scale
var_dump($a + $b);
var_dump(bcadd($a, $b));
var_dump($b + $a == 0.3);

echo "bcadd with scale";
var_dump(bcadd($a, $b) == 0.3);
var_dump(bcadd($a, $b,1) == 0.3); //function bcadd ($left_operand, $right_operand, $scale = 0) {}

//Порядок арифметических операций и неожиданый результат
echo "0.1 + 0.2 - 0.3";
var_dump((int)(string)(0.1 + 0.2 - 0.3)); // float(5.5511151231258E-17)
var_dump(round(0.1 + 0.2 - 0.3,2));
/**
 * Notice: A non well formed numeric value encountered in add (php  >= 7.1 )
 * Новые ошибки уровней E_WARNING и E_NOTICE были добавлены при использовании некорректных строк с операторами,
 * ожидающими числа (+ - * / ** % << >> | & ^) и их эквивалентами с присваиванием. Ошибка уровня E_NOTICE выдается,
 * когда строка начинается с цифр, но далее содержит не цифровые символы, и ошибка уровня E_WARNING выдается тогда,
 * когда строка вообще не содержит цифр.
 * https://www.php.net/manual/ru/migration71.other-changes.php
 *
 * https://www.php.net/manual/ru/language.types.string.php#language.types.string.conversion
 * Значение определяется по начальной части строки. Если строка начинается с верного числового значения,
 * будет использовано это значение. Иначе значением будет 0 (ноль). Верное числовое значение - это одна или более цифр
 * (могущих содержать десятичную точку), по желанию предваренных знаком с последующим необязательным показателем степени.
 * Показатель степени - это 'e' или 'E' с последующими одной или более цифрами.
 * Начиная с версии PHP 5, при преобразовании объекта к числу с плавающей точкой выводится замечание об ошибке.
 *
 * Более подробную информацию об этом преобразовании смотрите в разделе о strtod(3) документации Unix.
 * http://man7.org/linux/man-pages/man3/strtod.3.html
 *
 * https://habr.com/ru/post/112953/
 */
echo "\"10.0 pigs\" + 1";
$foo = "10.0 pigs" + 1;          // $foo это float (11)
var_dump($foo);

echo 'echo (69.1-floor(69.1))';
var_dump(69.1-floor(69.1));
var_dump(round(69.1-floor(69.1),3));


//Sooo funny wit bcmath
echo "//Sooo funny wit bcmath";
$a = ' 0.1';
$b = '0.2';
var_dump(bcadd($a, $b, 1));
var_dump($a + $b);
