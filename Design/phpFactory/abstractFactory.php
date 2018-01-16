<?php
/**
 * 抽象工厂模式
 */
interface people
{
    public function say();
}

/**
 * 第一个男人类
 */
class OneMan implements people
{
    public function say()
    {
        echo "男1：我喜欢你\n";
    }
}

/**
 * 第二个男人类
 */
class TwoMan implements people
{
    public function say()
    {
        echo "男2：我看上你了\n";
    }
}

/**
 * 第一个女人类
 */
class OneWomen implements people
{
    public function say()
    {
        echo "women one: I dont't like you\n";
    }
}

/**
 * sencond women class
 */
class TwoWomen implements people
{
    public function say()
    {
        echo "Sencond women: get out\n";
    }
}

/**
 * Interface cteatePople 创建对象类
 * 注意：这里将对象的创建抽象成了一个接口
 */
interface createPeople
{
    public function createOne();

    public function createTwo();
}

/**
 * Class FactoryMan 用于创建男人对象的工厂类-继承createPeople
 */
class FactoryMan implements createPeople
{
    public function createOne()
    {
        return new OneMan();
    }

    public function createTwo()
    {
        return new TwoMan();
    }
}

class FactoryWomen implements CreatePeople
{
    public function createOne()
    {
        return new OneWomen();
    }

    public function createTwo()
    {
        return new TwoWomen();
    }
}

class Client
{
    public function test()
    {
        $factory = new FactoryMan();
        $man = $factory->createOne();
        $man->say();

        $man = $factory->createTwo();
        $man->say();

        $factory = new FactoryWomen();
        $women = $factory->createOne();
        $women->say();

        $women = $factory->createTwo();
        $women->say();
    }
}

$demo = new Client();
$demo->test();