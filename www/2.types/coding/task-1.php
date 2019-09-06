<?php

$number = "1237998704546";

$sum = 0;
for ($i = 0, $length = strlen($number); $i < $length; $i++) {
    $sum += $number[$i];
}

echo $sum . "\n";
