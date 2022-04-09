<?php

namespace App\Services;

use App\Types\OrganiqueInterface;
use App\Services\AbstractService;

class Composteur extends AbstractService implements OrganiqueInterface
{
    public int $capacity;
    public int $foyers;

    public function __construct($capacity, $foyers)
    {
        $this->capacity = $capacity;
        $this->foyers = $foyers;
    }

}







