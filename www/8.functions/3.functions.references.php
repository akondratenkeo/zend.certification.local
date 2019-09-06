<?php

function &test()
{
    static $var = 0;

    $var++;
    echo $var;

    return $var;
}

$c = &test();
var_dump($c);

test();
test();

var_dump($c);
