<?php

/**
 * Использование криллицы абсолютно допустимо и не будет вызывать каких-либо критических ошибок,
 * но использование кириллицы создает определенные неудобства, а именно:
 *
 * - Русские слова обычно длиннее английских ("получить" - "get", "страница" - "page", ну и так далее).
 * - Необходимость постоянного переключения раскладки
 * - Каша из русских и английских слов визуально плохо выглядит
 * - Появляются чудово зможности для генерации багов. На примеру, отличие переменных (int)a и (int)а?
 * - Интернациональные комманды
 *
 * http://foxtools.ru/ASCII#28592
 *
 * !!! Возможны ньюансы с регулярными выражениями - тут кодировка будет сильно играть или нет
 */

//ну поехали!
define('ТР╟Ъ',true);
echo ТРУЪ;

//адаптируем немного
define('ВЕРНО',true);
define('БРЕХНЯ',false);

$на_улице = "тепло";
$градусник_показывает = ВЕРНО;
$чо_делать = "пока ничо";

if ($градусник_показывает && $на_улице == "тепло" ) {
    $чо_делать = "можно выходить";
} else {
    $чо_делать = "сидеть дома";
}
echo "Сегодня " . $на_улице. ", поэтому " . $чо_делать;

//теперь кириллические ключи
$_COOKIE['сгущенка'] = "1кг";
$_COOKIE['шоколад'] = "2кг";
$_COOKIE['крекер'] = "3кг";
$_ПЕЧЕНЬКИ = $_COOKIE;

//та-акс.. Проверим печеньки
echo "<pre>";
print_r($_ПЕЧЕНЬКИ);
echo "</pre>";

//так работает
function мегафункция(){
    $переменная2 = "это мегакруто :)";
    return $переменная2;
}

function мегафункция2($переменная){
    $переменная2 = "<br>Да, это ". $переменная . ", хотя и бесполезно";
    return $переменная2;
}

$переменная = "Кириллица в названиях переменных<br>";
echo $переменная;

echo $переменная2 = мегафункция();
echo мегафункция2($переменная2);