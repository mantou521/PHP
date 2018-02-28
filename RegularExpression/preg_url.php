<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/2/28
 * Time: 下午10:52
 */
$url = "http://www.php.net/index.html";
$pattern = "/^(http:\/\/)?([^\/]+)/i";
preg_match($pattern, $url, $matches);
var_dump($matches);

//匹配搜有不是斜线或者点的内容跟上所有不是斜线和那点的内容作为结尾
preg_match("/[^\.\/]+\.[^\.\/]+$/", $matches[2], $matches);
var_dump($matches);