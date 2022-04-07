<?php

require_once 'Service.php';
require_once '../Interfaces/OrganiqueInterface.php';

class Composteur extends Service implements OrganiqueInterface 
{
    public int $capacity;
    public int $foyers;

    public function __construct($capacity, $foyers)
{
    $this->capacity = $capacity;
    $this->foyers = $foyers;
}
    /**
     * Get the value of capacity
     */ 
    // public function getCapacity()
    // {
    //     //recupération des fichier data
    //     $json= new JsonFormatter();
    //     $data = $json->getData();
    //     $id = 9;
    //     $this->capacity = $data["services"][$id]["capacite"];
    //     return $this->capacity;
    // }
    // /**
    //  * Get the value of foyer
    //  */ 
    // public function getFoyer()
    // {
    //     //recupération des fichier data
    //     $json= new JsonFormatter();
    //     $data = $json->getData();
    //     $id = 9;
    //     $this->capacity = $data["services"][$id]["foyers"];
    //     return $this->foyer;
    // }

    // // le composteur n'accepte que les dechets organiques
    // public function acceptTypeDechet(?Dechet $dechet)
    // {
    //     if (!$dechet instanceof OrganiqueInterface) 
    //     {
    //         throw new Exception("", 1);
    //     }
    //     return parent::acceptTypeDechet($dechet);
    // }
}







