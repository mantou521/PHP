<?php

function foo(&$var)
{
  $var++;
}

$a = 5;
foo($a);

var_dump($a);


function &bar()
{
  $a = 5;
  return $a;
}

foo(bar());

var_dump($a);


class foo {
    public $value = 42;

    public function &getValue(): int
    {
        return $this->value;
    }
}

$obj = new foo;
$myValue = &$obj->getValue();

$obj->value = 2;
echo  $myValue;

#取消引用关联
# 当 unset 一个引用，只是断开了变量名和变量内容之间的绑定。这并不意味着变量内容被销毁了。例如：

$a = 1;
$b = & $a;
unset($a);

var_dump($a, $b);

#引用定位

# global

# $this 在一个对象的方法中，$this 永远是调用的对象的引用.