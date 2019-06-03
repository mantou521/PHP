<?php
require __DIR__.'/../vendor/autoload.php';

use Algorithm\Sort\BitMap;

$test_arr = array_rand(range(0, 639), 10);
$test_arr = [5, 13, 7, 639];

shuffle($test_arr);
$BitMap = new BitMap();
$arrtemp = $BitMap->bitMap($test_arr);
$result = $BitMap->outPut($arrtemp);
print_r($result);