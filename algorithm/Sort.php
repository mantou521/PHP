<?php

namespace mantou521\algorithm;

class Sort
{

    /**
     * 交换
     *
     * @param $a
     * @param $b
     */
    public function swap(&$a, &$b)
    {
        $c = $a;
        $a = $b;
        $b = $c;
    }

    /**
     * 冒泡
     * 平均和最坏情况下的时间复杂度都是 O(n^2)，最好情况下都是 O(n)，空间复杂度是 O(1)
     *
     * @param $arr
     */
    public function bubble_sort(&$arr)
    {
        for ($i = 0; $i < count($arr) - 1; $i++) {
            for ($j = 0; $j < count($arr) - 1 - $i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    self::swap($arr[$j], $arr[$j + 1]);
                }
            }

        }
    }

    public function quickSort($array)
    {
        if (count($array) <= 1)
            return $array;
        $mid = $array[0];
        $leftArray = [];
        $rightArray = [];

        foreach ($array as $value) {
            if ($value < $mid)
                $leftArray[] = $value;
            if ($value > $mid)
                $rightArray[] = $value;
        }

        $leftArray = $this->quickSort($leftArray);
        $leftArray[] = $mid;

        $rightArray = $this->quickSort($rightArray);

        return array_merge($leftArray, $rightArray);

    }

    /**
     * 全排列
     *
     * @param $arr
     * @param $str
     */
    public function allArranged($arr, $str)
    {
        $count = count($arr);
        if ($count == 1) {
            echo $str . $arr[0] . "\n";
        } else {
            for ($i = 0; $i < $count; $i++) {
                //第一位与最后一位交换
                $tmp = $arr[0];
                $arr[0] = $arr[$i];
                $arr[$i] = $tmp;
                self::allArranged(array_slice($arr, 1), $str . $arr[0]);
            }
        }
    }

    /**
     * 二分查找
     *
     * @param $arr
     * @param $start
     * @param $end
     * @param $target
     * @return bool|float
     */
    public function binarySearch($arr, $start, $end, $target)
    {
        $ret = false;

        while ($start <= $end) {
            $mid = floor(($start + $end) / 2);
            if ($arr[$mid] == $target) {
                $ret =  $mid;
                break;
            } elseif ($arr[$mid] < $target) {
                $start+=1;
            } else {
                $end-=1;
            }
        }

        return $ret;
    }
}


$Sort = new Sort();

#----------------------快排
$arr = array_rand(range(1, 3000), 1500);
shuffle($arr);

$t1 = microtime(true);
$result = $Sort->quickSort($arr);
$t2 = microtime(true);
echo ($t2 - $t1) * 1000 . "ms\n";

$t1 = microtime(true);
$Sort->bubble_sort($arr);
$t2 = microtime(true);
echo ($t2 - $t1) * 1000 . "ms\n";

die;

#...............交换
echo "交换\n";

$a = 1;
$b = 2;

$Sort->swap($a, $b);

var_dump($a, $b);


#............  全排列

echo "\n全排列\n";

$a = ['1', '2', '3', '4'];
$Sort->allArranged($a, '');

//var_dump($a, $b);

$Sort->allArranged(['1', '2', '3', '4'], '');

//冒泡
echo "冒泡\n";
$arr = array(21, 34, 3, 32);
$Sort->bubble_sort($arr);
for ($i = 0; $i < count($arr); $i++)
    echo $arr[$i] . "\n";

//二分查找
echo "二分查找\n";
$arr = array(2, 3, 4, 32);
$result = $Sort->binarySearch($arr, 0, 3, 3);
var_dump($result);


