<?php

$needle = "5";
$haystack = "442158755745";

$entries = 0;
for ($i = 0, $length = strlen($haystack); $i < $length; $i++) {
    if ($needle === $haystack[$i]) {
        $entries++;
    }
}

echo "Число \"{$needle}\" встречается {$entries} раз(а)\n";
