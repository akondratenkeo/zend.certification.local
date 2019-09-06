<?php

$foo = 'something';

function bar()
{
    global $foo;

    $foo = 'something new';
}

bar();

echo $foo . "\n";
