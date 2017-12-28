<?php
/**
 * 简单工厂模式(静态工厂方法模式)
 */
interface people
{
    public function say();
}

class man implements people
{
    public function say()
    {
        echo 'I\'m a man' . "\n";
    }
}

class women implements people
{
    public function say()
    {
        echo 'I\'m a women';
    }
}

class SimpleFactoty
{
    static function createMan()
    {
        return new man();
    }

    static function createWomen()
    {
        return new women();
    }
}

$man = SimpleFactoty::createMan();
$man->say();
$women = SimpleFactoty::createWomen();
$women->say();