<?php

//请匹配所有img标签中的src的值
$str = '<img alt="" id="" src="av.jpg" />';
$pattern = '/<img.*?src="(.*?)".*?\/?>/i';
preg_match($pattern, $str, $match);
var_dump($match);


$pattern = "/ab+/";
$subject = 'abbbc ab abbbb';
preg_match_all($pattern, $subject, $arr);


$pattern = "/[^ac]/";
preg_match_all($pattern, $subject, $arr1);
var_dump($arr1);

