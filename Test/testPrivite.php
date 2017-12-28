<?php

class TestPrivite
{
    private $a = 1;

    public  function index($value) {
        $this->a = $value;
    }

    public function get() {
        var_dump($this->a);
    }
}

$test = new TestPrivite();
$test->index(2);
$test->get();