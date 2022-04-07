<?php

require_once 'Data.php';

class Dechet extends JsonFormatter 
{
    public int $volume;

    public function __construct($volume)
    {
        $this->volume = $volume;
    }


    // public string $type;
    // public int $volume;
    // public int $co2Incineration;


    //     /**
    //  * Set the value of type
    //  *
    //  * @return  self
    //  */ 
    // public function setType($type)
    // {
    //     $this->type = $type;

    //     return $this;
    // }
    // /**
    //  * Get the value of volume
    //  */ 
    // public function getVolume($type): int
    // {
    //     //recupération des fichier data
    //     $json= new JsonFormatter();
    //     $data = $json->getData();
    //     $dechets = $data["quartiers"];
    //     //je fais la somme des volumes de chaque dechets
    //     $total[] = [];
    //     foreach ($dechets as $dechet) {
    //         array_push($total, (int)$dechet[$type]);  
    //     }
    //     $totalVol = array_sum($total);
    //     $this->volume = (json_encode($totalVol));
    //     return $this->volume;
    // }

    // //retourner les services correspondant aux dechets
    // public function findService() 
    // {
        
    // }    
    /**
     * Get the value of co2Incineration
     */ 
    // public function getCo2Incineration()
    // {
    //     $jsonCo2 = '../data/co2.json';
    //     $data = json_decode(file_get_contents($jsonCo2), true);
    //     // var_dump($data);
    //     return $this->co2Incineration;
    // }


}
