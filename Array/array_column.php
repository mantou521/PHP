<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/11/9
 * Time: 下午4:49
 */

$arr = array(
    '0' => array('id' => 1, 'name' => 'name1'),
    '1' => array('id' => 2, 'name' => 'name2'),
    '2' => array('id' => 3, 'name' => 'name3'),
    '3' => array('id' => 4, 'name' => 'name4'),
    '4' => array('id' => 5, 'name' => 'name5'),
);

/**
 * TODO :  array_column
 */
$name_list = array_column($arr, 'name');
var_dump($name_list);
echo "\n";

/**
 * TODO : array_walk
 */
$name_list = [];
array_walk($arr, function ($value, $key) use (&$name_list) {
    $name_list[] = $value['name'];
});

var_dump($name_list);
echo "\n";

/**
 * TODO : array_map
 */
$name_list = [];
array_map(function ($value) use (&$name_list) {
    $name_list[] = $value['name'];
}, $arr);

var_dump($name_list);
echo "\n";

/**
 * TODO : array_map
 */

$name_list = array_map('array_pop', $arr);

var_dump($name_list);

$test_array = [''];