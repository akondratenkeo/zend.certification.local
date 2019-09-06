<?php

/**
 * Каким будет результат работы данного вырвжения?
 */

function test()
{
    global $super;

    var_dump($$super);
}

$super = '_SERVER';

var_dump($$super);

test();
