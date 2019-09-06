<?php

// flush();
ob_start();

header('Content-Type: application/json');

include '3.separation.include.php';

$value = 'что-то откуда-то';
setcookie("TestCookie", $value, time() + 3600);

//var_dump(headers_sent());

header('X-Custom: new');

$c = $b + 50;

echo "\$c = {$c}";

$string = ob_get_contents();
ob_end_clean();
