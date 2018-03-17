<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/3/17
 * Time: 22:06
 */

namespace mantou521\MyArray;

/**
 * Applies the callback to the elements of the given arrays
 * 为每个元素(value值)应用回调函数
 *
 * Class array_map
 * @package mantou521\MyArray
 */
class array_map
{

    public function useLanbda()
    {
        $array = array(1, 2, 3, 4, 5);

        $result = array_map(function ($value) {
            return $value * 2;
        }, $array);

        var_dump($result);
    }

    public function stringKey()
    {
        $arr = ["stringkey" => "value"];
        var_dump(array_map(array(__CLASS__, 'returnArray'), $arr));
        var_dump(array_map(array(__CLASS__, 'returnArray2'), $arr, $arr));
        var_dump(array_map(null, $arr));
        var_dump(array_map(null, $arr, $arr));

    }

    /**
     * @param $value
     * @return array
     */
    public static function returnArray($value)
    {
        return [
            $value
        ];
    }

    /**
     * @param $value1
     * @param $value2
     * @return array
     */
    static function returnArray2($value1, $value2)
    {
        return [
            $value1,
            $value2
        ];
    }
}


$Instance = new array_map();

//$Instance->useLanbda();
$Instance->stringKey();
