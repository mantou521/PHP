<?php

namespace AbstractFactory;

class JsonFactory extends AbstractFactory
{
    public function createText($content): Text
    {
        return new JsonText($content);
    }
}