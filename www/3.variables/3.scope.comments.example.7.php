<?php

$var = 1;
function foo() {
    $var = &$GLOBALS['var'];
    var_dump($var);
}
function bar() {
    global $var; // they are the same.
    var_dump($var);
}
foo();
bar();
var_dump($var);

$var = 1;
function foo() {
    global $var;
    unset($var);               // unset local $a, the global $a is still there.
    var_dump($var);            // Undefined variable: var
    var_dump($GLOBALS['var']); // this is ok.
}
foo();
var_dump($var);                // this is ok.


$var = 1;
function bar() {
    global $var;
    unset($GLOBALS['var']);    // unset global $a, the local $a is still here.
    var_dump($var);            // this is ok.
    var_dump($GLOBALS['var']); // Undefined index: var
}
foo();
var_dump($var);
