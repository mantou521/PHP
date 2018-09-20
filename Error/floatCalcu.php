<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/16
 * Time: 8:55
 */
/**
 * float 精度计算存在误差，精度计算用bc函数
 */
$f = 0.58;    var_dump(intval($f * 100));

$a = 0.1;
$b = 0.7;
var_dump(($a + $b) == 0.8);
var_dump(bcadd($a,$b,2) == 0.8);