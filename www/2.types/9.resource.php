<?php

/**
 * Каким будет результат сравнения следующих выражений
 */

$f = fopen('9.resource.include.php', 'r+');
var_dump((int) $f);
echo get_resource_type($f);
