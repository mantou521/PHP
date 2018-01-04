<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/3
 * Time: 下午8:12
 */

namespace Strategy\model;


class StrategyConcreteB extends Strategy
{
    public function algorithmInterface()
    {
        echo '算法B实现' . PHP_EOL;
    }
}