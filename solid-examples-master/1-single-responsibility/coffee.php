<?php

class CoffeeMachine
{
    private $bean;
    private $water;

    public function __construct($bean, $water)
    {
        $this->bean = $bean;
        $this->water = $water;
    }

    public function makeCoffee()
    {
        return $this->bean + $this->water;
    }

    public function makeBeer()
    {
        return $this->water;
    }

    public function makeTea()
    {
        return $this->water;
    }
}
