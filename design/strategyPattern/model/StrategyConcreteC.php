<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/3
 * Time: 下午8:14
 */

namespace Strategy\model;


class StrategyConcreteC extends Strategy
{
    public function algorithmInterface()
    {
        echo '算法C实现' . PHP_EOL;
    }
}