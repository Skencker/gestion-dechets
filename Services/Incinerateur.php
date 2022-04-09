<?php

namespace App\Services;

use App\Types\MetauxInterface;
use App\Types\OrganiqueInterface;
use App\Types\PapierInterface;
use App\Types\VerreInterface;
use App\Services\AbstractService;


class Incinerateur extends AbstractService 
{
    public $lignFour;
    public $capaciteLign;
    public $capacity;

    public function __construct($lignFour, $capaciteLign)
    {
        $this->lignFour = $lignFour;
        $this->capaciteLign = $capaciteLign;
    }


    /**
     * Get the value of capacity
     */ 
    public function getCapacity()
    {
        $this->capacity = $this->lignFour * $this->capaciteLign;
        return $this->capacity;
    }
}
