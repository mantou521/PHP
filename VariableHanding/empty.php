<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/11/14
 * Time: 下午8:53
 */
/**
 * TODO: equivalent to !isset($var) || $var == false.
 * The following values are considered to be empty:

    "" (an empty string)
    0 (0 as an integer)
    0.0 (0 as a float)
    "0" (0 as a string)
    NULL
    FALSE
    array() (an empty array)
 *  $var (a variable that is declared but has no value)
 */
$variable;
var_dump(empty($variable));

$variable = 0;

if (isset($variable) && $variable >= 0) {
    echo "variable is gt 0\n";
}

if (empty($variable)) {
    echo "variable is not set Or is null or is 0 ...";
}