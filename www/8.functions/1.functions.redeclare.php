<?php

/**
 * Результатом работы данного скрипта будет:
 * - Fatal error:  Cannot redeclare test() (previously declared in ...)
 */

function test()
{
    return 'test';
}

function test()
{
    return 'test';
}

${test()} = '555';

$test = 666;

$m1 = 1;
