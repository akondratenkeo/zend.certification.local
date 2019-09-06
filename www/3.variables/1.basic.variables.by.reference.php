<?php

function &test()
{
    $a = 25;
    return $a;
}

$bar = &test();
$bar++;
var_dump($bar);
