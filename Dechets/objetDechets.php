<?php

namespace App\Dechets;

use App\Data\JsonFormatter;
use App\Dechets\DechetVerre;
use App\Dechets\DechetPapier;
use App\Dechets\DechetMetaux;
use App\Dechets\DechetOrganique;


//recupere la data
$json= new JsonFormatter();
$data = $json->getData();
$co2 = $json->getCo2();

$dechets = $data['quartiers'];

$dechetVerre = [];
$dechetPapier = []; 
$dechetMetaux = [];
$dechetOrganique = [];
// $totalCo2Rejet = 0;



foreach ($dechets as $dechet) {
    if ($dechet["verre"] ) 
    {
        $dechetVerre[] = new DechetVerre($dechet["verre"], $co2["verre"]["recyclage"]);
        $volumeTotalVerre =  0;
        foreach ($dechetVerre as $dechetV){
            $volumeTotalVerre += $dechetV->volume;
        }
              
    }
    if ($dechet["papier"] ) 
    {
        $dechetPapier[] = new DechetPapier($dechet["papier"], $co2["papier"]["recyclage"]);
        $volumeTotalPapier =  0;
        foreach ($dechetPapier as $dechetP){
            $volumeTotalPapier += $dechetP->volume;
        }
    }
    if ($dechet["metaux"] ) 
    {
        $dechetMetaux[] = new DechetMetaux($dechet["metaux"], $co2["metaux"]["recyclage"]);
        $volumeTotalMetaux =  0;
        foreach ($dechetMetaux as $dechetM){
            $volumeTotalMetaux += $dechetM->volume;
    
        }
    }
    if ($dechet["organique"] ) 
    {
        $dechetOrganique[] = new DechetOrganique($dechet["organique"], $co2["organique"]["compostage"]);
        $volumeTotalOrganique =  0;
        foreach ($dechetOrganique as $dechetO){
            $volumeTotalOrganique += $dechetO->volume;
        }
    }


    $tabDechets = [
        $dechetVerre,
        $dechetPapier, 
        $dechetMetaux,
        $dechetOrganique,
    ];
}
//calcul du total de co2 rejeter
// foreach ($co2 as $co)
// {
//     foreach ($co as $c)
//     {
//         $totalCo2Rejet += $c["recyclage"];
//         var_dump($totalCo2Rejet);
//     }
// }
