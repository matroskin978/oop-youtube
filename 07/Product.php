<?php

class Product
{

    public function __construct(
        public string $title,
        public int $price
    )
    {
    }

    public function getRealPrice($currency = '$'): string
    {
        return "{$currency}" . $this->price / 100;
    }

}