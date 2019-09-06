<?php

$fullName = "Иванов Иван Петрович";
$fullNameSegments = explode(' ', $fullName);

$fullNameShort = "{$fullNameSegments[0]}"
    . " " . mb_substr($fullNameSegments[1], 0, 1, "UTF-8") . "."
    . " " . mb_substr($fullNameSegments[2], 0, 1, "UTF-8") . ".\n";

echo $fullNameShort;
