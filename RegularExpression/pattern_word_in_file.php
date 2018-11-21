<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/8/1
 * Time: 上午11:39
 */

$file = 'test.text';
$files = file_get_contents($file);
$pattern = "/\b(\w+[-]*\w+)|(\w+)\b/";
preg_match_all($pattern, $files, $arr);
//单词出现频率
$words = array_count_values(array_map('strtolower', $arr[0]));
arsort($words);
var_dump($words);