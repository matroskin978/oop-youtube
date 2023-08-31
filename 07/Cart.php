<?php

class Cart
{

    public array $data = [];

    public function add(Product $product): static
    {
        $this->data[] = $product;
        return $this;
    }

    public function getTotal(): int|float
    {
        $total = 0;
        /** @var Product $item */
        foreach ($this->data as $item) {
            $total += $item->price;
        }
        return $total;
    }

}