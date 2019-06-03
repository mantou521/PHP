<?php

namespace Algorithm;

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
