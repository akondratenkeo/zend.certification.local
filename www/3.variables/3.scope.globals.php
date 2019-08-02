<?php

/**
 * Каким будет вывод данного скрипта?
 */

// Testing $_POST
$_POST['A'] = 'B';

$post = $_POST;
$post['A'] = 'C';

echo 'POST: ' . $_POST['A'] . ', Variable: ' . $post['A'];


// Testing $GLOBALS
$GLOBALS['A'] = 'B';

$globals = $GLOBALS;
$globals['A'] = 'C';

echo 'GLOBALS: ' . $GLOBALS['A'] . ', Variable: ' . $globals['A'];
