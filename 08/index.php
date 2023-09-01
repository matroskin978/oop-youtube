<?php

error_reporting(-1);

require __DIR__ . '/Product.php';
require __DIR__ . '/Book.php';
require __DIR__ . '/Phone.php';

$phone = new Phone('Phone', 10000, 'MediaTek');
$book = new Book('Book', 5000, 300);

var_dump($phone);
var_dump($book);

echo $book->info();
echo $phone->info();
