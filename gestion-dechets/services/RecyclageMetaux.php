<?php

require_once 'Recyclage.php';
require_once '../Interfaces/MetauxInterface.php';
require_once 'Data.php';

class RecyclageMetaux extends Recyclage implements MetauxInterface
{

    public $capacity;

    public function __construct($capacity)
    {

        $this->capacity = $capacity;
    }

    // public function getCapacity(): int
    // {
    //     //recupération des fichier data
    //     $json= new JsonFormatter();
    //     $data = $json->getData();
    //     $id = 8;
    //     $this->capacity = $data["services"][$id]["capacite"];
    //     return $this->capacity;
    // }
    // // le recyclage de métaux n'accepte que les métaux
    // public function acceptTypeDechet(?Dechet $dechet)
    // {
    //     if (!$dechet instanceof VerreInterface) 
    //     {
    //         throw new Exception("", 1);
    //     }
    //     return parent::acceptTypeDechet($dechet);
    // }

}
