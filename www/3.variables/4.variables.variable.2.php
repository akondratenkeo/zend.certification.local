<?php

/**
 * Какой будет результат данного скрипта на версиях 5.х и 7.х
 */

class Foo
{
    public $foo = 'foo';

    public $bar = 'bar';

    public function test($prop)
    {
        return $this->$prop;
    }
}

$methods = ['test', 'test1', 'test2'];
$foo = new Foo();

echo $foo->$methods[0]('foo');
echo $foo->foo;
