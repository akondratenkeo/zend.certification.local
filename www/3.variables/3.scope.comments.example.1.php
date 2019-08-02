<?php

/**
 * Какой будет вывод следующего скрипта?
 */

class SampleClass
{
    public static $s = 'unchanged';

    public function get() {
        return self::$s;
    }

    public function set() {
        self::$s = 'changed';
    }
}

$a = new SampleClass();
$b = new SampleClass();

echo $a->get() . "\n";
echo $b->get() . "\n";

$a->set();

echo $a->get() . "\n";
echo $b->get() . "\n";
