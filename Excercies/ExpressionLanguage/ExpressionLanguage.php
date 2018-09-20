<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

$expression = new ExpressionLanguage();

var_dump($expression->evaluate('not ("foo" matches "/bar/")')).PHP_EOL; // true
var_dump($expression->evaluate('1 + 1')).PHP_EOL;
