<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/7
 * Time: 下午8:44
 */

namespace Design\Singleton\Tests;

include_once './././vendor/autoload.php';

use Design\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}