<?php

class CoffeeMachine implements DrinkMachineInterface
{
    private $bean;
    private $water;

    public function __construct($bean, $water)
    {
        $this->bean = $bean;
        $this->water = $water;
    }

    public function make()
    {
        return $this->bean + $this->water;
    }
}

class BeerMachine implements DrinkMachineInterface
{
    private $malt;
    private $water;

    public function __construct($malt, $water)
    {
        $this->malt = $malt;
        $this->water = $water;
    }

    public function make()
    {
        return $this->malt + $this->water;
    }
}

class TeaMachine implements DrinkMachineInterface
{
    private $leaf;
    private $water;

    public function __construct($leaf, $water)
    {
        $this->leaf = $leaf;
        $this->water = $water;
    }

    public function make()
    {
        return $this->leaf + $this->water;
    }
}

interface DrinkMachineInterface
{
    public function make();
}

class Person
{
    public function getDrink(DrinkMachineInterface $machine)
    {
        return $machine->make();
    }
}

$p = new Person();
$p->getDrink(new CoffeeMachine());
$p->getDrink(new BeerMachine());
