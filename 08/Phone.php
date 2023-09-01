<?php

class Phone extends Product
{

    public function __construct(
        string $title,
        int $price,
        public string $cpu
    )
    {
        parent::__construct($title, $price);
    }

    public function info(): string
    {
        $info = parent::info();
        return $info . "CPU: {$this->cpu}";
    }

}