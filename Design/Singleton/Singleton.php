<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/7
 * Time: 下午7:50
 */

namespace Design\Singleton;


final class Singleton
{
    private static $instance;

    /**
     * @return mixed
     */
    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }


}