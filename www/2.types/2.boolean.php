<?php

/**
 * Каким будет результат сравнения следующих выражений
 */

var_dump((bool) false);
var_dump((bool) 0);
var_dump((bool) -0);
var_dump((bool) 0.0);
var_dump((bool) -0.0);
var_dump((bool) "");
var_dump((bool) "0");
var_dump((bool) array());
var_dump((bool) null);
var_dump((bool) @$a);
var_dump((bool) 'NULL');
var_dump((bool) 1);
var_dump((bool) -2);
var_dump((bool) "foo");
var_dump((bool) 2.3e5);
var_dump((bool) array(0 => 0));
var_dump((bool) "false");

var_dump((bool) simplexml_load_string('<html></html>'));
