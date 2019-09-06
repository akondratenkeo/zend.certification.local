<?php

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

/**
 * $foo = 1 + "10.5";
 * $foo = 1 + "-1.3e3";
 * $foo = 1 + "bob-1.3e3";
 * $foo = 1 + "bob3";
 * $foo = 1 + "10 Small Pigs";
 * $foo = 4 + "10.2 Little Piggies";
 * $foo = "10.0 pigs " + 1;
 * $foo = "10.0 pigs " + 1.0;
 */

var_dump((string) true);
var_dump((string) false);
var_dump((string) null);
var_dump((string) new stdClass());
var_dump((string) 2.302200);
var_dump((string) 2.3e5);
var_dump((string) 1000);
var_dump((string) []);
