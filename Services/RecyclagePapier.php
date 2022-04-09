<?php

namespace App\Services;

use App\Types\PapierInterface;
use App\Services\Recyclage;

class RecyclagePapier extends Recyclage implements PapierInterface
{

    public $capacity;

    public function __construct($capacity)
    {

        $this->capacity = $capacity;
    }

}