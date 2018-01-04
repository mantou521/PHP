<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/4
 * Time: 下午11:00
 */

namespace Design\Builder\Parts;


abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}