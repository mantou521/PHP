<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/2/27
 * Time: 下午8:43
 */

$pattern = "/%[^a-zA-Z]+%/";
$str = "hello %999%world!";

$rst = preg_match($pattern, $str);
var_dump($rst);

