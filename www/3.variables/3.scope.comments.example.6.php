<?php

function foo()
{
    // here you have all global variables
    extract($GLOBALS);

    echo "inner: $a\n";
}

$a = "1234";

foo();
