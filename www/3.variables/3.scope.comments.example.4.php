<?php

/**
 * Какой будет вывод следующего скрипта?
 */

function foo()
{
    $a = "a";
    global $a;
}

function bar()
{
    global $b;
    $b = "b";
}

foo();
echo $a;

bar();
echo $b;
