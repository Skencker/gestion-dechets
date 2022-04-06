<?php


require_once 'Recyclage.php';
require_once 'VerreInterface.php';
require_once 'data/Data.php';

class RecyclageVerre extends Recyclage implements VerreInterface
{
    public string $consigne;

    /**
     * Get the value of consigne
     */ 
    public function getConsigne(): string
    {
           //recupération des fichier data
           $json= new JsonFormatter();
           $data = $json->getData();
           $id = 7;
           $this->consigne = $data["services"][$id]["consigne"];
           if ($data["services"][$id]["consigne"] = 1){
                $this->consigne = "Oui";
            } else {
                $this->consigne = "Non";
               
           }
           return $this->consigne;
    }

    public function getCapacity(): int
    {
        //recupération des fichier data
        $json= new JsonFormatter();
        $data = $json->getData();
        $id = 7;
        $this->capacity = $data["services"][$id]["capacite"];
        return $this->capacity;
    }
}
