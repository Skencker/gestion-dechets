<?php

class CapsuleNespresso
{
}

class NespressoCoffeeMachine
{
    protected $capsule;

    public function setCapsule(CapsuleNespresso $capsule)
    {
        $this->capsule = $capsule;
    }

    public function prepare()
    {
        // do something with $this->capsule
    }
}

$machine = new NespressoCoffeeMachine()

$machine->setCapsule(new CapsuleNespresso());
$coffee = $machine->prepare();

$machine->setCapsule(new CapsuleNespresso());
$coffee = $machine->prepare();
