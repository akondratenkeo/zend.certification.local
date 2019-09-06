<?php

function foo(iterable $iterable = []) {
    foreach ($iterable as $key => $value) {
        echo "{$key} => {$value}\n";
    }
}

/**
 * Fatal error: Class MyIterator must implement interface Traversable as part of either Iterator or IteratorAggregate
 */
class MyIterator implements Traversable
{
    protected $stack = [];

    public function __construct(iterable $stack = [])
    {
        $this->stack = $stack;
    }
}

$array = ['one', 'two', 'three'];
$iterable = new MyIterator($array);

foo($array);
