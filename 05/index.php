<?php

error_reporting(-1);

require __DIR__ . '/Cart.php';

$cart = new Cart();
echo $cart->add(['title' => 'Product 1', 'price' => 10])->getTotal() . PHP_EOL;
echo $cart->add(['title' => 'Product 2', 'price' => 15])->getTotal() . PHP_EOL;
echo $cart->add(['title' => 'Product 2', 'price' => 20])->getTotal() . PHP_EOL;

//var_dump($cart);
//var_dump($cart->getTotal());
