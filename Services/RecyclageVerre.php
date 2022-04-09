<?php

namespace App\Services;

use App\Data\JsonFormatter;
use App\Dechets\AbstractDechet;
use App\Types\VerreInterface;
use App\Services\Recyclage;
use Exception;

class RecyclageVerre extends Recyclage implements VerreInterface
{
    public string $consigne;
 
    public function setDechet($tabDechets) 
    {
        foreach ($tabDechets as $dechet)
        {
            var_dump($dechet);
        }

        $this->tabDechets = $tabDechets;

        return $this;

    }

    // public function setVolDechets(AbstractDechet $dechet)
    // {
    //     if (!($dechet instanceof VerreInterface)) {
    //         throw new \Exception('Cannot assign a verre service to a  non-verre');
    //     }

    //     parent::setVolDechets($dechet);
    // }

    // /**
    //  * Get the value of consigne
    //  */ 
    // public function getConsigne(): string
    // {
    //        //recupération des fichier data
    //        $json= new JsonFormatter();
    //        $data = $json->getData();
    //        $id = 7;
    //        $this->consigne = $data["services"][$id]["consigne"];
    //        if ($data["services"][$id]["consigne"] = 1){
    //             $this->consigne = "Oui";
    //         } else {
    //             $this->consigne = "Non";
               
    //        }
    //        return $this->consigne;
    // }

    // public function getCapacity(): int
    // {
    //     //recupération des fichier data
    //     $json= new JsonFormatter();
    //     $data = $json->getData();
    //     $id = 7;
    //     $this->capacity = $data["services"][$id]["capacite"];
    //     return $this->capacity;
    // }
    //le recyclage de verre n'accepte que le verre
    // public function addDechets()
    // {
        // if (!$dechet instanceof VerreInterface) 
        // {
        //     throw new Exception("ERREUR", 1);
        // }
        // if ($this->recyclageVerre["capacite"] > $this->volumeTotalVerre) {
        //     echo "ok";
        // }
        // return parent::addDechets($dechet);
    // }

    /**
     * Get the value of capacity
     */ 
   
}
