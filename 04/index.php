<?php

error_reporting(-1);

require __DIR__ . '/Product.php';

$phone = new Product();
//echo $phone->sayHello();
$phone->price = 1000;
//var_dump($phone);
var_dump($phone->getRealPrice());

$book = new Product();
$book->price = 700;
var_dump($book->getRealPrice('EUR '));
