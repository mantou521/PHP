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

    /**
    * 全排列
    */
    public function allArranged($array, $str)
    {
        $count = count($array);
        if ($count == 1) {
            echo $str . $array[0] . "\n";
        } else {
            for ($i=0; $i < count($array); $i++) { 
                $tmp = $array[0];
                $array[0] = $array[$i];
                $array[$i] = $tmp;
                self::allArranged(array_slice($array, 1), $str . $array[0]);
            }
        }

    }
}


$Sort = new Sort();

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








