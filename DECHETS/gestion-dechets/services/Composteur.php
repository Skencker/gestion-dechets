<?php

require_once 'Service.php';
require_once 'OrganiqueInterface.php';

class Composteur extends Service implements OrganiqueInterface 
{
    public int $capacity;
    public int $foyer;
    /**
     * Get the value of capacity
     */ 
    public function getCapacity()
    {
        //recupération des fichier data
        $json= new JsonFormatter();
        $data = $json->getData();
        $id = 9;
        $this->capacity = $data["services"][$id]["capacite"];
        return $this->capacity;
    }
    /**
     * Get the value of foyer
     */ 
    public function getFoyer()
    {
        //recupération des fichier data
        $json= new JsonFormatter();
        $data = $json->getData();
        $id = 9;
        $this->capacity = $data["services"][$id]["foyers"];
        return $this->foyer;
    }
}







