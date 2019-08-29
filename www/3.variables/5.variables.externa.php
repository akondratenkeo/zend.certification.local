<?php

/**
 * Dots , spaces and [  in variable names are converted to underscores. For example:
 * <input name="a.b" /> becomes $_REQUEST["a_b"].
 * <input name="a b" /> becomes $_REQUEST["a_b"].
 * <input name="a[b" /> becomes $_REQUEST["a_b"].
 * <input name="a]b" /> becomes $_REQUEST["a]b"].
 * <input name="a-b" /> becomes $_REQUEST["a-b"].
 * <input name="a/b" /> becomes $_REQUEST["a/b"].
 * <input name="a\b" /> becomes $_REQUEST["a\b"].
 * <input name="a,b" /> becomes $_REQUEST["a,b"].
 */

/**
 * Какой будет результат если нам прийдет следующий запрос с фронта?
 * <input name="a. b[x. y]" value="foo" />
 *
 * var_dump($_POST) - ???
 */
