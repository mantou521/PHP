<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/3
 * Time: 下午8:10
 */

namespace Strategy\model;


class StrategyConcreteA extends Strategy
{
        public function algorithmInterface()
        {
            echo '算法A实现' . PHP_EOL;
        }
}