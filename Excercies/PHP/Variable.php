<?php

function foo(...$params, $arg)
{
    echo "$arg";
}

foo(1, 2, 3, 4);
