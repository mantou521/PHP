<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 18/1/5
 * Time: 16:07
 */
include_once './././vendor/autoload.php';

$c = new \Design\Decorator\Model\ConcreteComponent();
$d1 = new \Design\Decorator\Model\ConcreteDecoratorA();
$d2 = new \Design\Decorator\Model\ConcreteDecoratorB();

$d1->setComponent($c);
$d2->setComponent($d1);
$d2->operation();


