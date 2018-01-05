<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 18/1/5
 * Time: 15:37
 */

namespace Design\Decorator\Model;


class ConcreteDecoratorA extends Decorator
{
    private $addedState;

    public function operation()
    {
        $this->addedState = "New State";
        echo "具体装饰对象A的操作";
    }
}