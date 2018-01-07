<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 18/1/5
 * Time: 15:26
 */

namespace Design\Decorator\Model;


class ConcreteComponent extends Component
{
    public function operation()
    {
        echo "具体对象的操作";
    }
}