<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/3
 * Time: 下午8:17
 */

namespace Strategy\model;

use Strategy\model\Strategy;

class Context
{
    protected $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function contextInterface()
    {
        $this->strategy->algorithmInterface($this);
    }
}