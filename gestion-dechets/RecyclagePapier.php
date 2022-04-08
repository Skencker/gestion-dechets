<?php

require_once 'Recyclage.php';
require_once 'PapierInterface.php';
require_once 'Data.php';

class RecyclagePapier extends Recyclage implements PapierInterface
{

    public $capacity;

    public function __construct($capacity)
    {

        $this->capacity = $capacity;
    }

}