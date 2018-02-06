<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/2/4
 * Time: 下午4:53
 */

include_once './././vendor/autoload.php';
use File\File;

$dir = __DIR__;
$rst = (new File($dir))->files();
var_dump($rst);

$rst = (new File($dir))->allFiles();
var_dump($rst);