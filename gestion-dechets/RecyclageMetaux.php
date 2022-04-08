<?php

require_once 'Recyclage.php';
require_once 'MetauxInterface.php';
require_once 'Data.php';

class RecyclageMetaux extends Recyclage implements MetauxInterface
{

    public $capacity;

    public function __construct($capacity)
    {

        $this->capacity = $capacity;
    }

}
