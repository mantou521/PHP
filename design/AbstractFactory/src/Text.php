<?php
namespace AbstractFactory;

abstract class Text
{
    /**
     * @var string
     */
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }
}