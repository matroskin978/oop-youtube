<?php

error_reporting(-1);

require __DIR__ . '/Product.php';

$phone = new Product('Phone', 1000);
var_dump($phone);

$book = new Product('Book', 500);
var_dump($book);
