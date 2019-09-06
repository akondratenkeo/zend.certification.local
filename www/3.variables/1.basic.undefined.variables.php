<?php

/**
 * Значения по умолчанию в неинициализированных переменных
 * могут выдать непредсказуеммые результаты
 */

include "1.basic.undefined.variables.include.php";

$unset_str .= 'abc';
var_dump($unset_str);
