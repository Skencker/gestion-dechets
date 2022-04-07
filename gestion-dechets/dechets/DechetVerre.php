<?php

require_once "RecyclageDechets.php";
require_once '../Interfaces/VerreInterface.php';

class DechetVerre extends RecyclageDechets implements VerreInterface
{
    public int $volume;

    public function __construct($volume)
    {
        $this->volume = $volume;
    }

    //  public function getVolumeVerre(): int
    // {
    //     //recupération des fichier data
    //     $json= new JsonFormatter();
    //     $data = $json->getData();
    //     $dechets = $data["quartiers"];
    //     //je fais la somme des volumes de chaque dechets
    //     $total[] = [];
    //     foreach ($dechets as $dechet) {
    //         array_push($total, (int)$dechet["verre"]);  
    //     }
    //     $totalVol = array_sum($total);
    //     $this->volume = (json_encode($totalVol));
    //     return $this->volume;
    // }
}
