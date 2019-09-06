<?php

/**
 * Каким будет результат сравнения следующих выражений
 */

var_dump((object) null);
var_dump((object) 'hello');

$array = [
    1000,
    'first' => 'first',
    'second' => 'second',
    999,
];

$obj = (object) $array;

// До версии PHP7.2 будет ошибка
var_dump($obj->{'0'});
