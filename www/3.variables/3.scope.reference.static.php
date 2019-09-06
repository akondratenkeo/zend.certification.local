<?php

/**
 * Какой будет вывод данного скрипта?
 */

function get_instance_ref() {
    static $obj;

    echo 'Статический объект: ';
    var_dump($obj);

    if (!isset($obj)) {
        $class = new stdClass();
        $obj = &$class;
        $obj->property = 0;
    }

    $obj->property++;
    return $obj;
}

function &get_instance_noref() {
    static $obj;

    echo 'Статический объект: ';
    var_dump($obj);

    if (!isset($obj)) {
        // Присвоить объект статической переменной
        $obj = [];
    }

    $obj[] = 'A';
    return $obj;
}

//$obj1 = get_instance_ref();
//$still_obj1 = get_instance_ref();

echo "\n";

$obj2 = &get_instance_noref();
$obj2[] = 'B';
$still_obj2 = &get_instance_noref();
var_dump($still_obj2);
