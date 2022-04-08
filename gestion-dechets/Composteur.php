<?php

require_once 'Service.php';
require_once 'OrganiqueInterface.php';

class Composteur extends Service implements OrganiqueInterface 
{
    public int $capacity;
    public int $foyers;

    public function __construct($capacity, $foyers)
    {
        $this->capacity = $capacity;
        $this->foyers = $foyers;
    }

}







