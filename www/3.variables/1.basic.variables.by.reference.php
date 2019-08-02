<?php

/**
 * Важно отметить, что по ссылке могут быть присвоены только именованные переменные.
 *
 * $bar = &(24 * 7); // Неверно; ссылка на неименованное выражение.
 */

function &test()
{
    return 25;
}

/**
 * Сгенерирует E_NOTICE: "Notice: Only variable references should be returned by reference"
 */
$bar = &test();
