<?php

class Book extends Product
{

    public function __construct(
        string $title,
        int $price,
        public int $num_pages
    )
    {
        parent::__construct($title, $price);
    }

    public function info(): string
    {
        $info = parent::info();
        return $info . "Num of Pages: {$this->num_pages}";
    }

}