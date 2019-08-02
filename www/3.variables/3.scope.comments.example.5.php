<?php

function testa()
{
    global $a;

    echo "inner testa: $a\n";
    unset ($a);
    echo "inner testa: " . @$a . "\n";
}

function testb()
{
    global $a;

    echo "inner testb: $a\n";
    $a = null;
    echo "inner testb: $a\n";
}

$a = "1234";

echo "outer: $a\n";
testa();

echo "outer: $a\n";
testb();

echo "outer: $a\n";
