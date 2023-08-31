<?php

error_reporting(-1);

require __DIR__ . '/Cart.php';
require __DIR__ . '/Product.php';

//$product2 = [1, 2];
$product = new Product('Some product', 1000);
$product2 = new Product('Some product 2', 500);

$cart = new Cart();
//echo $cart->add(['title' => 'Product 1', 'price' => 10])->getTotal() . PHP_EOL;
echo $cart->add($product)->getTotal() . PHP_EOL;
echo $cart->add($product2)->getTotal() . PHP_EOL;

var_dump($cart);
var_dump($cart->getTotal());
