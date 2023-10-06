<?php


namespace class;

abstract class CoffeMaker
{
    public function makecoffe():string
    {
        return static::class. 'fait un café';
    }
}
?>