<?php

namespace App\Services;

use App\Dechets\AbstractDechet;

abstract class AbstractService {


    public $volumeTotal;

    public function getType(): string
    {
        return str_replace([__NAMESPACE__ . '\\', 'Services'], '', get_class($this));
    }

        /**
     * Get the value of volumeTotal
     */ 
    public function getVolumeTotal($dechet)
    {
        // $this->volumeTotal = $dechet->;
        return $this->volumeTotal;
    }

  
    //je recupere les dechets
    // public function setDechet($tabDechets) 
    // {
    //     $this->tabDechets = $tabDechets;

    //     return $this;

    // }




    // // je recupere le volume de chaque déchets
    // /**
    //  * Set the value of volDechets
    //  *
    //  * @return  self
    //  */ 
    // public function setVolDechets(AbstractDechet $dechet)
    // {
    //     $this->Dechets = $dechet;

    //     return $this;
    // }

    // //je recupere le type de dechet.
    // public function getType(): string
    // {
    //     return str_replace([__NAMESPACE__ . '\\', 'Dechets'], '', get_class($this));
    // }

    // // public $acceptTypeDechet;

    // //determiner le type de dechets accépter
    // public function addDechets()
    // {
    //     //check if there is space
    //     // if ($this->recyclageVerre["capacite"] > $this->volumeTotalVerre) {
    //     //     echo "ok";
    //     // }
    //     //filled with the amount of glass $volumeTotalGlass
    //     //comparison of the volume of waste and the capacity of the service
    //     //if capacity > volume stop
    //     //if capacity < volume the rest goes to another department

    //     // $this->dechet = $dechet;

    //     return $this;
    // }

    // /**
    //  * Get the value of typeDechet
    //  */ 
    // public function getTypeDechet()
    // {
    //     get_class($this);
    //     return $this->typeDechet;
    // }

    // /**
    //  * Set the value of typeDechet
    //  *
    //  * @return  self
    //  */ 
    // public function setTypeDechet($typeDechet)
    // {
    //     $this->typeDechet = $typeDechet;

    //     return $this;
    // }




} 

