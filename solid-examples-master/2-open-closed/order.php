<?php

class Order
{
    protected $products = [];

    public function addproduct($product)
    {
        $this->products[] = $product;
        return $this;
    }

    public function getAmount()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }
}
