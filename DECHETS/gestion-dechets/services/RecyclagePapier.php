<?php

require_once 'Recyclage.php';
require_once 'PapierInterface.php';
require_once 'data/Data.php';

class RecyclagePapier extends Recyclage implements PapierInterface
{
    public function getCapacity(): int
    {
        //recupération des fichier data
        $json= new JsonFormatter();
        $data = $json->getData();
        $id = 6;
        $this->capacity = $data["services"][$id]["capacite"];
        return $this->capacity;
    }

}