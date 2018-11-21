<?php

/**
 * 反向引用
 */
$str = '<b>abc</b>';
$pattern = '/<b>(.*)<\/b>/';
echo preg_replace($pattern, '\\1 ', $str);
die;


/**
 * 数组替换模式
 */
$string = "The quick brown fox jumped over the lazy dog";
$pattern[0] = "/quick/";
$pattern[1] = "/brow/";
$pattern[2] = "/fox/";
$replacements[0] = "slow";
$replacements[1] = "black";
$replacements[2] = "bear";
echo preg_replace($pattern, $replacements, $string);
echo "\n\n\n";


/**
 * replacement 可以包含 //n 形式或（自 PHP 4.0.4 起）$n 形式的逆向引用，首选使用后者。每个此种引用将被替换为与第 n 个被捕获的括号内的子模式所匹配的文本。n 可以从 0 到 99，其中 //0 或 $0 指的是被整个模式所匹配的文本。对左圆括号从左到右计数（从 1 开始）以取得子模式的数目。
 * 对替换模式在一个逆向引用后面紧接着一个数字时（即：紧接在一个匹配的模式后面的数字），不能使用熟悉的 //1 符号来表示逆向引用。举例说 //11，将会使 preg_replace() 搞不清楚是想要一个 //1 的逆向引用后面跟着一个数字 1 还是一个 //11 的逆向引用。本例中的解决方法是使用 /${1}1。这会形成一个隔离的 $1 逆向引用，而使另一个 1 只是单纯的文字。
 *
 * $0 全部； $1 第一个匹配； $2...... ${3}...$n
 *
 */
$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '${1}1,$3';
preg_match($pattern,$string, $result);
var_dump($result);

$result = preg_replace($pattern,$replacement, $string);
var_dump($result);