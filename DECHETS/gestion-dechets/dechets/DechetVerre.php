<?php

require_once "Recyclage.php";

class DechetVerre extends Recyclage
{
    // public function getVolume()
    // {
    //     //recupération des fichier data
    //     $jsonDechet = 'data/dechets.json';
    //     // transformation en array
    //     $datasDechet = json_decode(file_get_contents($jsonDechet), true);
    //     $dechets = $datasDechet["quartiers"];

    //     $totalVerre[] = [];
    //     foreach ($dechets as $dechet) {
    //         array_push($totalVerre, (int)$dechet["verre"]);  
    //     }
    //     $totalV = array_sum($totalVerre);
    //     $this->volume = (json_encode($totalV));
    //     return $this->volume;
    // }
}
