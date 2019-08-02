<?php

/**
 * Какой будет вывод данного скрипта?
 */

function test_global_ref()
{
    global $obj, $var;
    $obj = $var;
}

function test_global_noref()
{
    global $var;
    $var = '199';
}

test_global_ref();
var_dump($obj);

test_global_noref();
var_dump($obj);
