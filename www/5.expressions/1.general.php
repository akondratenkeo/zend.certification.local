<?php

/**
 * Каким будет результат работы данного скрипта?
 */

function double($i)
{
    return $i * 2;
}

$b = $a = 5;
$c = $a++;
$e = $d = ++$b;

$f = double($d++);
$g = double(++$e);
$h = $g += 10;
