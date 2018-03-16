<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/3/16
 * Time: 23:15
 */
namespace mantou521\MyArray;

/**
 * 遍历数组类
 *
 * foreach
 * for
 * each 7.2弃用
 * list
 *
 * Class TranversingArray
 * @package mantou521\MyArray
 */
class TranversingArray
{
    private $array = [
        'd' => 'lemon',
        'a' => 'orange',
        'b' => 'banana',
        'c' => 'apple'
    ];

    public function __construct()
    {
        error_reporting(E_ALL||~E_NOTICE);
    }

    /**
     * The each() function is deprecated in PHP7.2
     */
    public function each()
    {
        while (list($key, $val) = each($this->array)) {
            echo $key . '=>' . $val . "\n";
        }
    }
}

$Tranverse = new TranversingArray();
$Tranverse->each();
