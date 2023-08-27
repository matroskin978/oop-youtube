<?php

class MyClass
{

}

$a = new MyClass();
$b = new MyClass();

var_dump($a, $b);

var_dump(new (MyClass::class));

function test($class)
{
    return $class;
}

var_dump(new (test('MyClass')));
