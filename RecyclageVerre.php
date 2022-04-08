<?php


require_once 'Recyclage.php';
require_once 'VerreInterface.php';
require_once 'Data.php';

class RecyclageVerre extends Recyclage implements VerreInterface
{
    public string $consigne;
    public $capacity;

    public function __construct($capacity)
    {

        $this->capacity = $capacity;
    }

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
    // le recyclage de verre n'accepte que le verre
    public function addDechets(?Dechet $dechet)
    {
        if (!$dechet instanceof VerreInterface) 
        {
            throw new Exception("ERREUR", 1);
        }
        // if ($this->recyclageVerre["capacite"] > $this->volumeTotalVerre) {
        //     echo "ok";
        // }
        return parent::addDechets($dechet);
    }
}
