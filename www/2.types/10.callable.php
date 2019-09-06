<?php

function my_callback_function() {
    echo "Hello World\n";
};

call_user_func('my_callback_function');

/**
 * Class A()
 */
class A
{
    public static function foo()
    {
        echo "A::foo()\n";
    }

    public static function bar()
    {
        echo "A::bar()\n";
    }
}

class B extends A
{
    public static function foo()
    {
        echo "B::foo()\n";
    }

    public function __invoke($name)
    {
        return "Hello, {$name}!\n";
    }
}

call_user_func(array('A', 'foo'));

$objA = new A();
call_user_func(array($objA, 'foo'));

call_user_func('A::bar');

call_user_func(array('B', 'parent::foo'));

$objB = new B();
echo call_user_func($objB, "Alex");

$double = function ($number) {
    return $number * 2;
};

var_dump(is_callable($double));

$array = range(1, 5);

echo implode(' ', array_map($double, $array)) . "\n";
