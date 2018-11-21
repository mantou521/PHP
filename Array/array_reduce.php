<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/11/13
 * Time: 下午1:22
 */

namespace mantou521\MyArray;


class array_reduce
{
    public $arr = [1, 2, 3, 4, 5];

    public function sum()
    {
        return array_reduce($this->arr, function ($last, $item) {
            $last += $item;
            return $last;
        });
    }

    public function product()
    {
        return array_reduce($this->arr, function ($last, $item) {
            $last *= $item;
            return $last;
        }, 10);
    }

    public function sumMap()
    {
        array_map(function ($value) use (&$sum) {
            $sum += $value;
        }, $this->arr);

        return $sum;
    }
}

var_dump((new array_reduce)->sum());

var_dump((new array_reduce)->product());

var_dump((new array_reduce)->sumMap());