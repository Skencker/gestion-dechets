<?php

class CapsuleNespresso
{
}

class NespressoCoffeeMachine
{
    protected $capsule;

    public function __construct()
    {
        $this->capsule = new CapsuleNespresso();
    }

    public function prepare()
    {
        // do something with $this->capsule
    }
}

$machine = new NespressoCoffeeMachine();
$coffee = $machine->prepare();
