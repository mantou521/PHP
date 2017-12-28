<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2017/12/25
 * Time: 下午10:26
 */

class MyClass
{
    /**
     * 测试函数
     * 第一个参数必须为 OtherClass 类的一个对象
     */
    public function test(OtherClass $otherclass) {
        echo $otherclass->var;
    }


    /**
     * 另一个测试函数
     * 第一个参数必须为数组
     */
    public function test_array(array $input_array) {
        print_r($input_array);
    }


/**
 * 第一个参数必须为递归类型
 */
public function test_interface(Traversable $iterator) {
    echo get_class($iterator);
}

/**
 * 第一个参数必须为回调类型
 */
public function test_callable(callable $callback, $data) {
    call_user_func($callback, $data);
}
}

// OtherClass 类定义
class OtherClass {
    public $var = 'Hello World';
}

$myclass = new MyClass();
$otherclass = new OtherClass();

$myclass->test($otherclass);
