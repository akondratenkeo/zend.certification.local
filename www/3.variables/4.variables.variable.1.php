<?php

/**
 * Какой будет результат данного скрипта на версиях 5.х и 7.х
 */

$testVar = [
    'foo' => 'foo',
    'bar' => [
        'foo' => '_foo',
        'bar' => '_bar',
        'baz' => '_baz',
    ],
    'baz' => 'baz',
];
$foo = 'testVar';

var_dump($$foo['bar']['baz']);
