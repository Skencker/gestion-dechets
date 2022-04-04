<?php

class Dechet
{

    //volume
    //co2 incineration

    public int $volume;
    // public string $type;

    /**
     * Get the value of volume
     */ 
    public function getVolume($type): int
    {
        //recupération des fichier data
        $jsonDechet = '../data/data.json';
        // transformation en array
        $datasDechet = json_decode(file_get_contents($jsonDechet), true);
        $dechets = $datasDechet["quartiers"];

        $total[] = [];
        foreach ($dechets as $dechet) {
            array_push($total, (int)$dechet[$type]);  
        }
        $totalVol = array_sum($total);
        $this->volume = (json_encode($totalVol));
    //    var_dump($totalVol);
        return $this->volume;
    }
}
