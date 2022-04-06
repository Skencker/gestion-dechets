<?php

class CapsuleNespresso
{
}

class NespressoCoffeeMachine
{
    protected $capsule;

    public function __construct(CapsuleNespresso $capsule)
    {
        $this->capsule = $capsule;
    }

    public function prepare()
    {
        // do something with $this->capsule
    }
}

$machine = new NespressoCoffeeMachine(new CapsuleNespresso());
$coffee = $machine->prepare();

$machine = new NespressoCoffeeMachine(new CapsuleNespresso());
$coffee = $machine->prepare();
