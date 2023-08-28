<?php

error_reporting(-1);

require __DIR__ . '/Product.php';

$phone = new Product();
$phone->title = 'Phone';
$phone->price = 100;
$phone->cpu = 'Some CPU';
var_dump($phone);
var_dump($phone->price);

$book = new Product();
$book->title = 'Book';
$book->price = 20.6;
var_dump($book);
var_dump($book->title);
