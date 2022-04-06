<?php

class OrderDiscount extends Order
{
    private $discount;
    public function __construct($discount)
    {
        $this->discount = $discount;
    }

    public function getAmount()
    {
        $total = parent::getAmount();
        return $total * $this->discount;
    }
}
