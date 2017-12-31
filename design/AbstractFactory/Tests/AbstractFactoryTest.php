<?php

namespace AbstractFactory\Tests;

include_once './vendor/autoload.php';

use AbstractFactory\HtmlFactory;
use AbstractFactory\HtmlText;
use AbstractFactory\JsonFactory;
use AbstractFactory\JsonText;
use PHPUnit\Framework\TestCase;


class AbstractFactoryTest extends TestCase
{
    public function testCanCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(HtmlText::class, $text);
    }

    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('goobar');

        $this->assertInstanceOf(JsonText::class, $text);
    }

}