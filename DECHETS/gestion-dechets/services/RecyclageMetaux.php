<?php

require_once 'Recyclage.php';
require_once 'MetauxInterface.php';
require_once 'data/Data.php';

class RecyclageMetaux extends Recyclage implements MetauxInterface
{
    public function getCapacity(): int
    {
        //recupération des fichier data
        $json= new JsonFormatter();
        $data = $json->getData();
        $id = 8;
        $this->capacity = $data["services"][$id]["capacite"];
        return $this->capacity;
    }

}
