<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/17
 * Time: 11:15
 */

namespace Math;


class Fibonacci
{
    public function instance_1()
    {
        $arr[0] = 0;
        $arr[1] = 1;
        for ($i = 2; $i < 100; $i++) {
            $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
        }
        echo join("\n", $arr);
    }

    public function instance_2()
    {
        $fib = function($n) use (&$fib){
            if ($n == 0) {
                return 0;
            }
            if ($n == 1 || $n == 2) {
                return 1;
            }
            return $fib($n - 1) + $fib($n - 2);
        };

        for($i = 0; $i < 10; $i++) {
            echo $fib($i) . "\n";
        }
    }


}

$ex = new Fibonacci();
$ex->instance_1();

$ex->instance_2();

