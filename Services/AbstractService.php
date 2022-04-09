<?php

namespace App\Services;

use App\Dechets\AbstractDechet;

abstract class AbstractService {

    public $typeDechet;

    // public $acceptTypeDechet;

    //determiner le type de dechets accépter
    public function addDechets()
    {
        //check if there is space
        // if ($this->recyclageVerre["capacite"] > $this->volumeTotalVerre) {
        //     echo "ok";
        // }
        //filled with the amount of glass $volumeTotalGlass
        //comparison of the volume of waste and the capacity of the service
        //if capacity > volume stop
        //if capacity < volume the rest goes to another department

        // $this->dechet = $dechet;

        return $this;
    }

    /**
     * Get the value of typeDechet
     */ 
    public function getTypeDechet()
    {
        get_class($this);
        return $this->typeDechet;
    }

    /**
     * Set the value of typeDechet
     *
     * @return  self
     */ 
    public function setTypeDechet($typeDechet)
    {
        $this->typeDechet = $typeDechet;

        return $this;
    }
} 

