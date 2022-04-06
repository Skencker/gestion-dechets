<?php

require_once 'Service.php';

class Composteur extends Service {
    //capacité
    public int $capacity;
    //foyer
    public int $foyer;

    public function __construct($capacity, $foyer)
    {
        $this->capacity = $capacity;
        $this->foyer = $foyer;
    }

}







