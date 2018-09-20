<?php

//$name = 'Jean Luc';
//$age  = 9;
//
//printf("My name is %2$.s and I'm %1$02d", $age, $name);

function foo(&$a = 8)
{
    $b = &$a;
    $b -= $a + 3;

    return $b;
}
$c = 4;
$a = foo(4);
echo $a;
