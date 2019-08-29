<?php

/**
 * Какой будет результат данного скрипта на версиях 5.х и 7.х
 */

// Given these variables ...
$nameTypes  = array("first", "last", "company");
$name_first = "John";
$name_last = "Doe";
$name_company = "PHP.net";

// Then this loop is ...
foreach($nameTypes as $type) {
    print ${"name_{$type}"} . "\n";
}