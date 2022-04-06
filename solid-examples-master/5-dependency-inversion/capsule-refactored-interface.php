<?php

interface CapsuleNespressoInterface
{
}

class CapsuleNespresso implements CapsuleNespressoInterface
{
}

class CapsuleRepere implements CapsuleNespressoInterface
{
}

class NespressoCoffeeMachine
{
    protected $capsule;

    public function setCapsule(CapsuleNespressoInterface $capsule)
    {
        $this->capsule = $capsule;
    }

    public function prepare()
    {
        // do something with $this->capsule
    }
}

$machine = new NespressoCoffeeMachine();

$machine->setCapsule(new CapsuleNespresso());
$coffee = $machine->prepare();

$machine->setCapsule(new CapsuleRepere());
$coffee = $machine->prepare();
