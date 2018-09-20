<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\PropertyAccess\PropertyAccess;

$accessor = PropertyAccess::createPropertyAccessor();

class Person
{
    private $children = array(
        'wouter' => 'Wouter',
    );

    public function __call($name, $args)
    {
        $property = lcfirst(substr($name, 3));
        if ('get' === substr($name, 0, 3)) {
            return isset($this->children[$property])
                ? $this->children[$property]
                : null;
        } elseif ('set' === substr($name, 0, 3)) {
            $value = 1 == count($args) ? $args[0] : null;
            $this->children[$property] = $value;
        }
    }
}
$accessor = PropertyAccess::createPropertyAccessorBuilder()
    ->enableMagicCall()
    ->getPropertyAccessor();
$person = new Person();

$wouter = $accessor->getValue($person, 'wouter');

var_dump($wouter);
//Wrong
