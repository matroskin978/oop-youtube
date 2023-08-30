<?php

class Product
{

//    public ?string $title;
//    public int $price;

    /*public function __construct(string $title, int $price)
    {
//        echo "Object create\n";
        $this->title = $title;
        $this->price = $price;
    }*/

    public function __construct(
        public string $title,
        public int $price
    )
    {
        echo "Object created\n";
    }

    public function getRealPrice($currency = '$'): string
    {
        return "{$currency}" . $this->price / 100;
    }

}