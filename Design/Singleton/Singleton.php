<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/7
 * Time: 下午7:50
 */

namespace Design\Singleton;

/**
 * 单例模式
 *
 * 使应用中只存在一个对象的示例，并且使这个单例负责所有对该对象的调用
 *
 * 实例：数据库连接器； 日志（也可多模块不同记录）;应用锁（理论整个应用只有一个锁文件)
 * Class Singleton
 * @package Design\Singleton
 */
final class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }
}