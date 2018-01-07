<?php

namespace mantou521\algorithm;

class Sort
{

    /**
     * 冒泡排序
     *
     * @param $array
     * @return mixed
     */
    public function bubbleSort($array)
    {
        $count = count($array);
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if ($array[$i] > $array[$j]) {
                    $c = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $c;
                }
            }
        }

        return $array;
    }

    public function swap(&$a, &$b)
    {
        $c = $a;
        $a = $b;
        $b = $c;
    }
}

$a = 1;
$b = 2;

$Sort = new Sort();
$Sort->swap($a, $b);

var_dump($a, $b);