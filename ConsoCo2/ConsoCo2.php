<?php

namespace App\ConsoCo2;

class ConsoCo2 {
    
    // public  $incineration;
    public  $recyclage;

    public function __construct( $recyclage)
    {
        // $this->incineration -> $incineration;
        $this->recyclage -> $recyclage;
    }


    /**
     * Get the value of recyclage
     */ 
    public function getRecyclage()
    {
        return $this->recyclage;
    }
}
