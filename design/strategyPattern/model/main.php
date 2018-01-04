<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/3
 * Time: 下午8:31
 */
include_once 'vendor/autoload.php';

use Strategy\model\StrategyConcreteA;
use Strategy\model\StrategyConcreteB;
use Strategy\model\StrategyConcreteC;
use Strategy\model\Context;

$context = new Context(new StrategyConcreteA);
$context->contextInterface();

$context = new Context(new StrategyConcreteB);
$context->contextInterface();

$context = new Context(new StrategyConcreteC);
$context->contextInterface();