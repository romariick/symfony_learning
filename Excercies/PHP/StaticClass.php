<?php

class A
{
    protected static $attr = 'foo';

    public static function getAttr()
    {
        return static::$attr;
    }
}

class B extends A
{
    public static function method()
    {
    }

    protected static $attr = 'bar';
}

echo B::getAttr();

$bool = (bool) 'true';

echo $bool;
