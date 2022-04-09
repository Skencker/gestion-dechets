<?php

namespace App\Dechets;

use App\Data\JsonFormatter;
use App\Dechets\DechetVerre;
use App\Dechets\DechetPapier;
use App\Dechets\DechetMetaux;
use App\Dechets\DechetOrganique;



$json= new JsonFormatter();
$data = $json->getData();

$dechets = $data['quartiers'];

$dechetVerre = [];
$dechetPapier = []; 
$dechetMetaux = [];
$dechetOrganique = [];

foreach ($dechets as $dechet) {
    if ($dechet["verre"] ) 
    {
        $dechetVerre[] = new DechetVerre($dechet["verre"]);
        $volumeTotalVerre =  0;
        foreach ($dechetVerre as $dechetV){
            $volumeTotalVerre += $dechetV->volume;
        }
    }
    if ($dechet["papier"] ) 
    {
        $dechetPapier[] = new DechetPapier($dechet["papier"]);
        $volumeTotalPapier =  0;
        foreach ($dechetPapier as $dechetP){
            $volumeTotalPapier += $dechetP->volume;
        }
    }
    if ($dechet["metaux"] ) 
    {
        $dechetMetaux[] = new DechetMetaux($dechet["metaux"]);
        $volumeTotalMetaux =  0;
        foreach ($dechetMetaux as $dechetM){
            $volumeTotalMetaux += $dechetM->volume;
        }
    }
    if ($dechet["organique"] ) 
    {
        $dechetOrganique[] = new DechetOrganique($dechet["organique"]);
        $volumeTotalOrganique =  0;
        foreach ($dechetOrganique as $dechetO){
            $volumeTotalOrganique += $dechetO->volume;
        }
    }
}
// print_r($dechetVerre);
// print_r($dechetVerre["volume"]->getVolume());
// print_r($volumeTotalVerre);
// echo "<br>";
// echo "<br>";
// print_r($dechetPapier);
// echo "<br>";
// echo "<br>";
// print_r($dechetMetaux);
// echo "<br>";
// echo "<br>";
// print_r($dechetOrganique);
