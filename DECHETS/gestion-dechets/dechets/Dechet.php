<?php

class Dechet
{
    public int $volume;
    public int $co2Incineration;

    /**
     * Get the value of volume
     */ 
    public function getVolume($type): int
    {
        //recupération des fichier data
        $jsonDechet = '../data/data.json';
        $datasDechet = json_decode(file_get_contents($jsonDechet), true);
        $dechets = $datasDechet["quartiers"];
        
        $total[] = [];
        foreach ($dechets as $dechet) {
            array_push($total, (int)$dechet[$type]);  
        }
        $totalVol = array_sum($total);
        $this->volume = (json_encode($totalVol));
        return $this->volume;
    }
    
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
