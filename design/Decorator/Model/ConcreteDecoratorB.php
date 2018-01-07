<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 18/1/5
 * Time: 15:57
 */

namespace Design\Decorator\Model;

use Design\Decorator\Model\Decorator;

class ConcreteDecoratorB extends Decorator
{
    public function operation()
    {
        Parent::operation();
        $this->AddedBehavior();
        echo "具体装饰对象B的操作";
    }

    private function addedBehavior()
    {

    }
}