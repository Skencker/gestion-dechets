<?php

namespace App\Services;

use App\Services\Recyclage;
use App\Types\MetauxInterface;

class RecyclageMetaux extends Recyclage implements MetauxInterface
{

    public $capacity;

    public function __construct($capacity)
    {

        $this->capacity = $capacity;
    }

}
