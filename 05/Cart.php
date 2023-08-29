<?php

class Cart
{

    public array $data = [];

    public function add(array $product): static
    {
        $this->data[] = $product;
        return $this;
    }

    public function getTotal(): int|float
    {
        $total = 0;
        foreach ($this->data as $item) {
            $total += $item['price'];
        }
        return $total;
    }

}