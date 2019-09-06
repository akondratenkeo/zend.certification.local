<?php

$stack = [];
for ($i = 0; $i < 20; $i++) {
    $stack[] = rand(25, 500);
}

$min = $max = $stack[0];
for ($i = 1, $count = count($stack); $i < $count; $i++) {
    $min = ($min > $stack[$i]) ? $stack[$i] : $min;
    $max = ($max < $stack[$i]) ? $stack[$i] : $max;
}

echo "[" . implode(' ', $stack) . "]\n";
echo "Min элемент массива: {$min}\n";
echo "Max элемент массива: {$max}\n";
