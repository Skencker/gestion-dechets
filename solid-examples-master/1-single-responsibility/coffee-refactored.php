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
}

class BeerMachine
{
    private $malt;
    private $water;

    public function __construct($malt, $water)
    {
        $this->malt = $malt;
        $this->water = $water;
    }

    public function makeBeer()
    {
        return $this->malt + $this->water;
    }
}


class TeaMachine
{
    private $leaf;
    private $water;

    public function __construct($leaf, $water)
    {
        $this->leaf = $leaf;
        $this->water = $water;
    }

    public function makeTea()
    {
        return $this->leaf + $this->water;
    }
}
