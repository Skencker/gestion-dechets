<?php

require_once 'Recyclage.php';
require_once '../Interfaces/PapierInterface.php';
require_once 'Data.php';

class RecyclagePapier extends Recyclage implements PapierInterface
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
    //     $id = 6;
    //     $this->capacity = $data["services"][$id]["capacite"];
    //     return $this->capacity;
    // }

    // // le recyclage de papier n'accepte que le papier
    // public function acceptTypeDechet(?Dechet $dechet)
    // {
    //     if (!$dechet instanceof PapierInterface) 
    //     {
    //         throw new Exception("", 1);
    //     }
    //     return parent::acceptTypeDechet($dechet);
    // }

}