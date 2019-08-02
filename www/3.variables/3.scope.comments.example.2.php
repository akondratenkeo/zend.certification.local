<?php

/**
 * Какой будет вывод следующего скрипта?
 */

function foo()
{
    $foo = 'foo';

    function bar()
    {
        global $foo;

        echo "\$foo in BAR is: " . $foo . "\n";
    }

    bar();

    echo "\$foo in FOO is: " . $foo . "\n";
}

foo();
