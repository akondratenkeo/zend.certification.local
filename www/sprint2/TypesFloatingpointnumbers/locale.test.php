<?php
/**
 * This causes very serious problems in my opinion. In some locale combination the typecasting can be destructive.
 * Maybe when locale decimal separator is ",", then (float)"2,5" should be recognized as "two and a half"?
 * Anyway - bare that in mind and be very careful when casting floats to strings and back.
 */
setlocale(LC_ALL, "pl_PL");
$a = 5/2;
echo (float)(string)$a;
/// prints "2", so the decimal part is dropped
