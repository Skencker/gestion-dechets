<?php

namespace App\Services;

use App\Services\AbstractService;

class Recyclage extends AbstractService {

    public $capacity;

    public function __construct($capacity)
    {

        $this->capacity = $capacity;
    }
}
