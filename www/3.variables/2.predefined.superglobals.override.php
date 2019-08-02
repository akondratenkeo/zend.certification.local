<?php

/**
 * Скрипт выполняет POST-запрос на URL ./index.php?var1=111&$var2=222
 * POST данные:
 * - var3=333
 * - var1=999
 *
 * Чему будет равен $_REQUEST['var1'] при php_ini[request_order = "PGC"]
 */
